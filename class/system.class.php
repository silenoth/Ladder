<?php

class lsSystem {
    protected $con;
    //var $datos = array();
    
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
                
        $tmpl = $twig->loadTemplate($template._EXT);
        $url = self::getUrl();
        $tmplfldr = _TEMPLATESFOLDER._DS.$this->templateFolder();
                
        echo $tmpl->render(
            array(
                'ls' => $datos,
                'url' => $url,
                'template' => $tmplfldr)
            );
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
    private function getUrl(){
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
    
/**
* @param int $lenghtChars
* Tamaño de la cadena.
* 
* @param string $type
* upper: Solo carácteres en mayusculas.
* lower: Solo carácteres en minúsculas.
* number: Solo caracteres numéricos.
* upper;lower - lower;upper: Mayusculas y minusculas.
* all: Carácteres mayusculas, minusculas y numéricos.
*/
    //cadena aleatoria
    public function randString($lenghtChars, $type){
        $chars = array(
        'upper' => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
        'lower' => "abcdefghijklmnopqrstuvwxyz",
        'number' => "1234567890"
        );
        switch ($type) {
            case 'upper':
            $char = $chars['upper'];
            break;
            
            case 'lower':
            $char = $chars['lower'];
            break;
            
            case 'number':
            $char = $chars['number'];
            break;
            
            case 'number;upper' || 'upper;number':
            $char = $chars['upper'].$chars['number'];
            break;
            
            case 'number;lower' || 'lower;number':
            $char = $chars['lower'].$chars['number'];
            break;
            
            case 'upper;lower' || 'lower;upper':
            $char = $chars['lower'].$chars['upper'];
            break;
            
            case 'all':
            $char = $chars['lower'].$chars['number'].$chars['upper'];
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
                 ".", " "),
            '',
            $string
        );
        return strtolower($string);
    }

    
   
        //dias trasncurridos
    public function daysElapsed($desde, $hasta){
        $dias	= (strtotime($desde)-strtotime($hasta))/86400;
        $dias 	= abs($dias); $dias = floor($dias);		
        return $dias;
    }
}