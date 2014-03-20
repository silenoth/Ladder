<?php

class lsSystem {
    protected $con;
    
    function __construct(){
        if(file_exists("config.php")){
            require_once("config.php");
                try {
                    $this->con = new PDO ('mysql:host='.$db['host'].';dbname='.$db['name'], $db['user'], $db['pass']);
                    $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $e){
                    echo "ERROR: " . $e->getMessage();
                }            
            } else {
            echo "El archivo de configuracion no existe.";
        }
    }
    
    //cerrar conexion
    public function closeCon(){
        return $this->con = null;
    }
    
    //setnames
    function setNames(){
        return $this->con->query("SET NAMES 'utf8'");
    }
    
    //leer carpetas de los templates
    function getFoldersFromTemplate(){
        $directorio = _TEMPLATEFOLDER._DS;
        $dires=array();
        $midir=opendir($directorio);
        $i=0;
        while($archivo=readdir($midir)){
            if (is_dir($directorio.$archivo) && $archivo!="." && $archivo!="..")
                $dires[$i++]=$archivo;
        }
        closedir($midir);
        return $dires; 
    }
    
    //obtener carpeta del template
    public function templateFolder(){
        self::setNames();
        $sql = "SELECT a.ajuste_template AS template FROM ajustes AS a";
        $res = $this->con->query($sql);
        $res->execute();
        
        while($row = $res->fetch()){
            $array[] = $row;
        }
        
        return $array[0]['template'];
        self::closeCon();
    }
    
    //cargar template
    public function loadTemplate($template,$datos){
        require_once 'lib/Twig/Autoloader.php';
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem(_TEMPLATESFOLDER._DS.$this->templateFolder());
        $twig = new Twig_Environment($loader, array(
            'cache' => 'cache',
            'debug' => 'true'
        ));
        $twig->getExtension('core')->setTimeZone('America/Santiago');
                
        $tmpl = $twig->loadTemplate($template._EXT);
        $url = self::getUrl();
        $tmplfldr = _TEMPLATESFOLDER._DS.$this->templateFolder();
        
        if(!empty($_SESSION['usuario'])){
            
           echo $tmpl->render(
            array(
                'ls' => $datos,
                'url' => $url,
                'sesion' => $_SESSION['usuario'],
                'nickclean' => $this->getNickClean($_SESSION['usuario']),
                'online' => $this->addOnline(),
                'uonline' => $this->nickUserOnline(),
                'total' => $this->countOnline(),
                'template' => $tmplfldr)
            ); 
        } else {
            echo $tmpl->render(
            array(
                'ls' => $datos,
                'url' => $url,
                'online' => $this->addOnline(),
                'uonline' => $this->nickUserOnline(),
                'total' => $this->countOnline(),                
                'template' => $tmplfldr)
            ); 
        }     
        
    }
    
    //bbcode
    function bbcode($text){
        require_once 'lib/jBBcode/Parser.php';
        $parser = new JBBCode\Parser();
        $parser->addCodeDefinitionSet(new JBBCode\DefaultCodeDefinitionSet());
        
        $bbcode = $parser->getAsHtml($parser->parse($text));
        return $bbcode;
    }
    
    //emot
    public function getSmilies($smilies){
        $folder = $this->getUrl().'/emoticons/';
        $smilies = str_replace(
            array(
                ':)',
                ':angel:',
                ':angry:',
                '8-)',
                ':\'(',
                ':ermm:',
                ':D',
                '&lt;3'
            ), array(
                '<img src="'.$folder.'smile.png" alt=":)" title=":)">',
                '<img src="'.$folder.'angel.png" alt="angel" title="angel">',
                '<img src="'.$folder.'angry.png" alt="angry" title="angry">',
                '<img src="'.$folder.'cool.png" alt="8-)" title="8-)">',
                '<img src="'.$folder.'cwy.png" alt=":\'(" title=":\'(">',
                '<img src="'.$folder.'ermm.png" alt="ermm" title="ermm">',
                '<img src="'.$folder.'grin.png" alt=":D" title=":D">',
                '<img src="'.$folder.'heart.png" alt="<3" title="<3">',
            ), $smilies  
        );
        
        return $smilies;
    }
    
    //obtener lenguaje
    public function getLang(){
        self::setNames();
        $sql = "SELECT a.ajuste_lang AS lang FROM ajustes AS a";
        $res = $this->con->query($sql);
        $res->execute();
        
        while($row = $res->fetch()){
            $array[] = $row;
        }
        
        $rowcount = $res->rowCount();
        
        if($rowcount > 0) {
            if(file_exists(_LANGFOLDER._DS.$array[0]['lang']._DS.'index.php')){
                return _LANGFOLDER._DS.$array[0]['lang']._DS.'index.php';
                self::closeCon();
            } else {
                print(_ERRNOFILELANG);
                self::closeCon();                 
            }         
        } else {
            print(_ERRNOLANGFOLDERDB);
            self::closeCon();
        }
        
    }
    
    //obtener ruta absoluta
    public function getUrl(){
        self::setNames();
        $sql = "SELECT a.ajuste_url AS url FROM ajustes AS a";
        $res = $this->con->query($sql);
        $res->execute();
        
        while($row = $res->fetch()){
            $array[] = $row;
        }
        
        return $array[0]['url'];
        self::closeCon();
    }
    
    //obtener app id
    public function getAppId(){
        self::setNames();
        $sql = "SELECT a.ajuste_app_id AS id FROM ajustes AS a";
        $res = $this->con->query($sql);
        $res->execute();
        while($row = $res->fetch()){
            $array[] = $row;
        }
        return $array[0];
        self::closeCon();
    }
    
    //obtener intervalo de carousel
    public function getInterval(){
        $sql = "SELECT a.ajuste_interval_carousel AS carousel FROM ajustes AS a";
        $res = $this->con->query($sql);
        $res->execute();
        
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $array[] = $row;
        }
        $interval = $array[0]['carousel'] * 1000;
        return $interval;
        self::closeCon();
    }
    
    //cadena aleatoria
    public function randString($lenghtChars, $type){
        $chars = array(
        1 => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
        2 => "abcdefghijklmnopqrstuvwxyz",
        3 => "1234567890",
        4 => "abcdefghijklmnopqrstuvwxyz1234567890"
        );
        switch ($type) {
            case 1:
            $char = $chars[1];
            break;
            
            case 2:
            $char = $chars[2];
            break;
            
            case 3:
            $char = $chars[3];
            break;
            
            case 4:
            $char = $chars[4];
            break;
        }
        
         //posibles caracteres a usar
        $lchars = $lenghtChars; //numero de letras para generar el texto
        $string = ""; //variable para almacenar la cadena generada
        $char = str_split($char,1);
        for($i=0;$i<$lchars;$i++)
        {
            mt_srand((double)microtime() * 100000);
            $num = mt_rand(1,count($char));
            $string .= $char[$num-1]; /*Extraemos 1 caracter de los caracteres*/
        }
        return $string;
    }
    
    //obtener carpeta plugins
    public function getPluginsFolder(){
        self::setNames();
        $sql = "SELECT a.ajuste_plugins_folder AS plugin FROM ajustes AS a";
        $res = $this->con->query($sql);
        $res->execute();
        while($row = $res->fetch()){
            $array[] = $row;
        }
        return $array[0]['plugin'];
        self::closeCon();
    }
    
    //captcha
    public function captcha($clave){
   
        $fondo = array(255, 255, 255);
        $frente = array(0, 0, 128);
        $tam_x = 120;
        $tam_y = 70;
                    
        // Se toma un tipo de fuente de forma aleatoria
    	$fuentes = array(
        array('f' => ''.$this->getPluginsFolder().'/captcha/fonts/arial.ttf', 't' => '18'),
        array('f' => ''.$this->getPluginsFolder().'/captcha/fonts/edosz.ttf', 't' => '18'),
        array('f' => ''.$this->getPluginsFolder().'/captcha/fonts/ididthis.ttf', 't' => '14'),
        array('f' => ''.$this->getPluginsFolder().'/captcha/fonts/hcurve.ttf', 't' => '14'),
        array('f' => ''.$this->getPluginsFolder().'/captcha/fonts/ghms.ttf', 't' => '18')
        );
            
        $rand_fuente = rand(0, count($fuentes) - 1);
    	$fuente = $fuentes[$rand_fuente]["f"];
        $tam_fuente = $fuentes[$rand_fuente]["t"];
    		
    	// Envio del header de imagen en formato PNG
    	header("Content-type: image/png");
    		
    	// Validar que se puede crear una imagen (requiere GD)
    	if (function_exists("imagecreatetruecolor")){
    	   $imagen = imagecreatetruecolor($tam_x, $tam_y);
    	}
   		else{
    	   $imagen = imagecreate($tam_x, $tam_y) or die ("No se puede iniciar GD para crear una imagen");
    	}
    		
    	// Si existe el Anti-Alias se activa en la imagen
    	if (function_exists("imageantialias"))
    	{
    	   imageantialias($imagen, true);
    	}
    		
    		// Se toman de forma aleatoria los colores de fondo (claro) y texto (oscuro)
    		$fondo = imagecolorallocate($imagen, rand(224, 256), rand(224, 256), rand(224, 256));
    		$frente = imagecolorallocate($imagen, rand(0, 4), rand(0, 4), rand(64, 128));
    		
    		// Se rellena la imagen con el color de fondo
    		imagefill($imagen, 0, 0, $fondo);
    		
    		// Se genera un angulo aleatorio para girar el texto
    		$maximo_angulo = 30;
    		$angulo = rand(-100 * $maximo_angulo, 100 * $maximo_angulo) / 100.0;
    		
    		// Se coloca el texto en la imagen con su color, tipo de fuente y angulo
    		if (function_exists("imagettftext") && $fuente != ""){
    			$caja_texto = imagettfbbox($tam_fuente, $angulo, $fuente, $clave);
    			$min_x = min($caja_texto[0], $caja_texto[2], $caja_texto[4], $caja_texto[6]);
    			$max_x = max($caja_texto[0], $caja_texto[2], $caja_texto[4], $caja_texto[6]);
    			$min_y = min($caja_texto[1], $caja_texto[3], $caja_texto[5], $caja_texto[7]);
    			$max_y = max($caja_texto[1], $caja_texto[3], $caja_texto[5], $caja_texto[7]);
    			$x = max(0, ($caja_texto[0] - $min_x) + rand(0, $tam_x - ($max_x - $min_x)));
    			$y = max(0, ($caja_texto[1] - $min_y) + rand(0, $tam_y - ($max_y - $min_y)));
    			imagettftext($imagen, $tam_fuente, $angulo, $x, $y, $frente, $fuente, $clave);
    		}
    		else{
    			imagestring($imagen, 5, rand(0, $tam_x - 65), rand(0, $tam_y - 15), $clave, $frente);
    			if (function_exists("imagerotate"))
    			{
    				$imagen = imagerotate($imagen, $angulo, $fondo);
    			}
    		}
    		
    		// Se agregan lineas para dificultar la lectura del texto (para evitar el uso de bots)
    		$this->generar_ruido($imagen, (int)($tam_x / 15), 'x');
    		$this->generar_ruido($imagen, (int)($tam_y / 15), 'y');
    		
    		// Se crea y muestra la imagen
    		imagepng($imagen);
            imagedestroy($imagen);
        }
        
    // Se generan lineas de ruido a una imagen, se puede especificar la cantidad y eje donde se colocaran
	function generar_ruido($imagen, $cantidad = 5, $rango = 'y'){
    		// Se toma el tamaño de la imagen
    		$x = imagesx($imagen);
    		$y = imagesy($imagen);
		
    		// Se crean las lineas de ruido deseadas
    		for ($i = 0; $i < $cantidad; $i++)
    		{
    			// Se toma un color aleatorio (entre claro y oscuro)
    			$color = imagecolorallocate($imagen, rand(64, 192), rand(64, 192), rand(64, 192));
    			
    			// Se colocan las lineas en un eje de forma aleatoria
    			if ($rango == 'y')
    			{
    				$linea = rand(0, $x);
    				imageline($imagen, $linea, 0, $linea + rand(-10, 10), $y, $color);
    			}
    			else
    			{
    				$linea = rand(0, $y);
    				imageline($imagen, 0, $linea, $x, $linea + rand(-10, 10), $color);
    			}
    		}
	   }
    
    //limpiar texto
    function cleanString($string){
        $string = trim($string);
    
        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );
    
        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );
    
        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );
    
        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );
    
        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );
    
        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );
    
        //Esta parte se encarga de eliminar cualquier caracter extraño
        $string = str_replace(
            array("\\", "¨", "º", "-", "~",
                 "#", "@", "|", "!", "\"",
                 "·", "$", "%", "&", "/",
                 "(", ")", "?", "'", "¡",
                 "¿", "[", "^", "`", "]",
                 "+", "}", "{", "¨", "´",
                 ">", "< ", ";", ",", ":",
                 ".","™"),
            '',
            $string
        );
        
        $string = str_replace(" ","-",$string);
        return strtolower($string);
    }

    //mostrar success
    function showSuccess(){
        $where = $this->whereuFrom();
        $datos = array(
            'titulo' => 'Registro correcto!',
            'vengo' => $where
        );
        $this->loadTemplate('success', $datos);
    }
   
   //verificar si existe nick
    function checkNick($nick){
        self::setNames();
        $sql = "SELECT u.usuario_nick FROM usuarios AS u WHERE u.usuario_nick = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1, $nick, PDO::PARAM_STR);
        $res->execute();
        
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
            return true;
        }
    }
    
   function getNickClean($nick){
        self::setNames();
        $sql = "SELECT u.usuario_nick_clean AS nickclean FROM usuarios AS u WHERE u.usuario_nick = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1, $nick, PDO::PARAM_STR);
        $res->execute();
        
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
            return $datos[0]['nickclean'];
        }
   }
   
   function checkPass($pass){
    if($pass == ""){
        echo "<script>alert('No pude quedar en blanco este campo'); return false;</script>";
        exit();
    } else {
        self::setNames();
        $sql = "SELECT u.usuario_pass FROM usuarios AS u WHERE u.usuario_pass = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1, $pass, PDO::PARAM_STR);
        $res->execute();
        
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
            return true;
        }
    }
   }
   //iniciar session
   function sessionStart($nick,$pass){
        $checkuser = $this->checkNick($nick);
        $checkpass = $this->checkPass($pass);
        $ip = $_SERVER['REMOTE_ADDR'];
        if ($checkuser & $checkpass){
            $_SESSION['usuario'] = $nick;
            unset($_SESSION['captcha']);
            unset($_SERVER['registro']);
            //actualizamos ultima visita
            $sql = "UPDATE usuarios SET usuario_ultima_vis = NOW(), usuario_ip = ? WHERE usuario_nick = ?";
            $res = $this->con->prepare($sql);
            $res->bindParam(1,$ip,PDO::PARAM_STR);
            $res->bindParam(2,$nick,PDO::PARAM_STR);
            $res->execute();
            
            $back = $this->whereuFrom();
            header("Location: ".$back);
        } else {
            $back = $this->whereuFrom();
            header("Location: ".$back);
        }
   }
    
    public function whereuFrom(){
        if (!empty($_SERVER['HTTP_REFERER'])){
            $_SESSION['donde'] = $_SERVER['HTTP_REFERER'];
        } else {
            $_SESSION['donde'] = $this->getUrl();
        }
        $url = $_SESSION['donde'];
        return $url;
    }
    
    //obtener valor de reputacion maxima
    function getMaxRepLvl(){
        self::setNames();
        $sql = "SELECT a.ajuste_max_rep AS maxrep, a.ajuste_max_lvl AS maxlvl, a.ajuste_max_din AS maxdin FROM ajustes AS a";
        $res = $this->con->query($sql);
        $res->execute();
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
        }
        return $datos[0];
        self::closeCon();
    }
    
    //Agregar a la bd usuarios conectados
    function addOnline(){
        //tiempo en minutos de usuairo activo
        $time = 20;
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = time();
        $limite = $date-$time*60;
        
        if(!empty($_SESSION['usuario'])){
            $nickclean = $this->getNickClean($_SESSION['usuario']);
            $w = "SELECT u.usuario_nick AS nick, u.usuario_nick_clean AS nickclean, u.usuario_grupo AS grupo FROM usuarios AS u WHERE u.usuario_nick_clean = ?";
            $t = $this->con->prepare($w);
            $t->bindParam(1,$nickclean,PDO::PARAM_STR);
            $t->execute();
            while($rws = $t->fetch(PDO::FETCH_ASSOC)){
                $dts[] = $rws;
            }
            $grupo = $dts[0]['grupo'];
            $nickclean = $dts[0]['nickclean'];
            $nick = $dts[0]['nick'];
        } else {
            $_SESSION['invitado'] = "Invitado";
            $nickclean = $_SESSION['invitado'];
            $nick = $_SESSION['invitado'];
            $grupo = 4;
        }
        //borramos usuarios que han exedido del tiempo maximo
        $l = "DELETE FROM online WHERE online_last < ?";
        $x = $this->con->prepare($l);
        $x->bindParam(1,$limite,PDO::PARAM_INT);
        $x->execute();
        
        $sql = "SELECT * FROM online AS o WHERE o.online_ip = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$ip,PDO::PARAM_STR);
        
        $res->execute();
        $rc = $res->rowCount();
        
        if($rc != 0){
            //actualizar visitante
            $s = "UPDATE online SET online_grupo = ?, online_nick = ?, online_nick_clean = ?, online_last = ? WHERE online_ip = ?";
            $r = $this->con->prepare($s);
            $r->bindParam(1,$grupo,PDO::PARAM_STR);
            $r->bindParam(2,$nick,PDO::PARAM_STR);
            $r->bindParam(3,$nickclean,PDO::PARAM_STR);
            $r->bindParam(4,$date,PDO::PARAM_INT);
            $r->bindParam(5,$ip,PDO::PARAM_STR);
            $r->execute();
        } else {
            $q = "INSERT INTO online (online_grupo, online_nick, online_nick_clean, online_ip, online_last) VALUES (?,?,?,?,?)";
            $e = $this->con->prepare($q);
            $e->bindParam(1,$grupo,PDO::PARAM_STR);
            $e->bindParam(2,$nick,PDO::PARAM_STR);
            $e->bindParam(3,$nickclean,PDO::PARAM_STR);
            $e->bindParam(4,$ip,PDO::PARAM_STR);
            $e->bindParam(5,$date,PDO::PARAM_INT);
            $e->execute();
        }
        
    }
    
    //obtener nick de usuarios viendo la pagina
    function nickUserOnline(){
        self::setNames();
        $sql = "SELECT
                	o.online_nick AS nick,
                    o.online_nick_clean AS nickclean,
                    g.grupo_color AS color
                FROM
                	online AS o
                INNER JOIN grupos AS g ON (g.grupo_id = o.online_grupo)
                    ";
        $res = $this->con->query($sql);
        $res->execute();
        $rc = $res->rowCount();
        if($rc>0){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
                $datos[]=$row;
            }
            return $datos;
            self::closeCon();
        }
        
    }
    
    //obtener usuario conectado
    function getUserOnline($nick){
        self::setNames();
        $sql = "SELECT
                	u.usuario_nick
                FROM
                	usuarios AS u, online AS o
                WHERE
                	u.usuario_nick_clean = ?
                AND o.online_nick_clean = u.usuario_nick_clean";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$nick,PDO::PARAM_STR);
        $res->execute();
        
        $rc = $res->rowCount();
        if($rc > 0 ){
            return true;
        } else {
            return false;
        }
    }
    
    //contar usuarios visitas
    function countOnline(){
        $sql = "SELECT
        	(
        		SELECT COUNT(*)
        		FROM `online`
        		WHERE	`online`.online_nick <> 'invitado'
        	) AS registrado,
        	(
        		SELECT COUNT(*)
        		FROM `online`
        		WHERE	`online`.online_nick = 'invitado'
        	) AS invitado,
        	(
        		SELECT COUNT(*) FROM `online`
        	) AS total
        	
        FROM
        	`online`";
        $res = $this->con->query($sql);
        $res->execute();
        
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
        }
        
        return $datos[0];
    }
    
    //obtener nombre del canal twich de usuario
    public function getTwichChannel($user){
        self::setNames();
        $sql = "SELECT u.usuario_twichtv AS twich FROM usuarios AS u WHERE u.usuario_nick_clean = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$user,PDO::PARAM_STR);
        $res->execute();
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
        }
        
        return $datos[0]['twich'];
    }
        //dias trasncurridos
    public function daysElapsed($desde, $hasta){
        $dias	= (strtotime($desde)-strtotime($hasta))/86400;
        $dias 	= abs($dias); $dias = floor($dias);		
        return $dias;
    }
}