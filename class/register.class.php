<?php

class lsRegister extends lsSystem {
    
    private $array;
    
    function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }
        $this->array = array();
    }
    
    //mostrar plantilla de registro
    public function showRegister(){
        $captcha = 'captcha.php';
         
        $datos = array(
            'captcha' => $captcha
        );
        
        if(!empty($_GET['error'])){
            $datos['error'] = $_GET['error'];
        }
        $this->loadTemplate('register', $datos);
    }
    
    //verificar si existe mail
    function checkEmail($email){
        parent::setNames();
        $sql = "SELECT u.usuario_email FROM usuarios AS u WHERE u.usuario_email = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1, $email, PDO::PARAM_STR);
        $res->execute();
        
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
            return true;
        }
    }
    // verificar syntaxis
    function check_email_address($email){
        	// Primero, checamos que solo haya un símbolo @, y que los largos sean correctos
          if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)){
        		// correo inválido por número incorrecto de caracteres en una parte, o número incorrecto de símbolos @
            return false;
          }
          // se divide en partes para hacerlo más sencillo
          $email_array = explode("@", $email);
          $local_array = explode(".", $email_array[0]);
          for ($i = 0; $i < sizeof($local_array); $i++){
            if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])){
              return false;
            }
          } 
          // se revisa si el dominio es una IP. Si no, debe ser un nombre de dominio válido
        	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])){ 
             $domain_array = explode(".", $email_array[1]);
             if (sizeof($domain_array) < 2){
                return false; // No son suficientes partes o secciones para se un dominio
             }
             for ($i = 0; $i < sizeof($domain_array); $i++){
                if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])){
                   return false;
                }
             }
          }
          return true;
        }
        
    //Funcion registrar
    function register($nombre, $email, $nick, $pass){
        $checkemail =  $this->checkEmail($email);
        $chkemailsx = $this->check_email_address($email);
        if ($chkemailsx){
            if($checkemail) {
                header("Location: register.php?error=existemail");
                exit();
            }
            //limpiar nick
            $nclean = $this->cleanString($nick);
            $checknick = $this->checkNick($nclean);
            if($checknick) {
                header("Location: register.php?error=existuser");
                exit();
            }
            //generar el hash uncio para el usuario
            $hash = $this->randString(32,4);
            
            //encriptamos la contraseña
            $md5psw = md5($pass);
            //no avatar
            $noavatar = "no-avatar.jpg";
            //obtener la ip
            $myip = $_SERVER['REMOTE_ADDR'];
            $acceso = 7;
            $activo = 0;
            $reputa = 0;
            $nivel  = 0;
            parent::setNames();
            $sql = "INSERT INTO usuarios (
                    	usuario_acceso,
                    	usuario_hash,
                    	usuario_activo,
                    	usuario_nick,
                    	usuario_nick_clean,
                    	usuario_pass,
                    	usuario_email,
                    	usuario_avatar,
                    	usuario_nombre,
                    	usuario_fecha_ingreso,
                    	usuario_ip,
                    	usuario_reputacion,
                    	usuario_nivel)
                    VALUES
                    	(?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, ?, ?)";
            
            $res = $this->con->prepare($sql);
            $res->bindParam(1,$acceso, PDO::PARAM_INT);
            $res->bindParam(2,$hash, PDO::PARAM_STR);
            $res->bindParam(3,$activo,PDO::PARAM_INT);
            $res->bindParam(4,$nick,PDO::PARAM_STR);
            $res->bindParam(5,$nclean,PDO::PARAM_STR);
            $res->bindParam(6,$md5psw,PDO::PARAM_STR);
            $res->bindParam(7,$email,PDO::PARAM_STR);
            $res->bindParam(8,$noavatar,PDO::PARAM_STR);
            $res->bindParam(9,$nombre,PDO::PARAM_STR);
            $res->bindParam(10,$myip,PDO::PARAM_STR);
            $res->bindParam(11,$reputa,PDO::PARAM_INT);
            $res->bindParam(12,$nivel,PDO::PARAM_INT);
            $res->execute();
            parent::closeCon();
            header('Location: success.php');
        } else {
            header("Location: register.php?error=emailsyntax");
            exit();
        }
    }
}