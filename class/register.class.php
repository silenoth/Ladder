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
        'error' => $_SESSION['error'],
            'captcha' => $captcha
        );
        $this->loadTemplate('register', $datos);
    }
    
    function register($nombre, $email, $nick, $pass){
        //generar el hash uncio para el usuario
        $hash = $this->randString(32,'number;lower');
        //limpiar nick
        $nclean = $this->cleanString($nick);
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
        header('Location: home.php');
    }
}