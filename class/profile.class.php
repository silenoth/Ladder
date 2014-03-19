<?php

class lsProfile extends lsSystem {
    private $values;
    function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }
        $this->values=array();
    }
    
    function showProfile(){
        
        $repmax = $this->getMaxRepLvl();
        $us = $_GET['user'];
        $user = $this->getProfile($_GET['user']);
        $expl = explode(';',$user['opciones']);
        
        $datos = array(
            'online' => $this->getUserOnline($us),
            'id' => $user['id'],
            'fid' => $user['fid'],
            'acceso' => $user['acceso'],
            'grupo' => $user['grupo'],
            'color' => $user['color'],
            'activo' => $user['activo'],
            'nick' => $user['nick'],
            'email' => $user['email'],
            'avatar' => $user['avatar'],
            'firma' => $this->bbcode(str_replace(PHP_EOL, '<br />',$this->getSmilies($user['firma']))),
            'firmaclean' => $user['firma'],
            'nombre' => $user['nombre'],
            'apellido' => $user['apellido'],
            'ciudad' => $user['ciudad'],
            'pais' => $user['pais'],
            'sexo' => $user['sexo'],
            'nacimiento' => $user['nacimiento'],
            'ingreso' => $user['ingreso'],
            'ip' => $user['ip'],
            'skype' => $user['skype'],
            'gametag' => $user['gametag'],
            'reputacion' => $repmax['maxrep'] * $user['reputacion'] / 100 * 0.01,
            'nivel' => $repmax['maxlvl'] * $user['nivel'] / 100 * 0.01,
            'dinero' => $repmax['maxdin'] * $user['dinero'] / 100 * 0.01 / 2,
            'facebook' => $user['facebook'],
            'twitter' => $user['twitter'],
            'ultimapagina' => $user['ultimapagina'],
            'ultimavisita' => $user['ultimavisita'],
            'ultimopost' => $user['ultimopost'],
            'advertencia' => $user['advertencia'],
            'web' => $user['web'],
            'alerta' => $user['alerta'],
            'opciones' => array(
                'chkgametag' => $expl[0],
                'chkskype' => $expl[1],
                'chkfacebook' => $expl[2],
                'chktwitter' => $expl[3],
                'chkweb' => $expl[4]
            ),
            'valores' => array(
                'chkgametag' => $expl[0],
                'chkskype' => $expl[1],
                'chkfacebook' => $expl[2],
                'chktwitter' => $expl[3],
                'chkweb' => $expl[4]
            )
        );
        $this->loadTemplate('profile', $datos);
    }
    
    function getProfile($nick){
        parent::setNames();
        $sql = "SELECT 
        u.usuario_id AS id,
        u.usuario_fb_id AS fid,
        u.usuario_acceso AS acceso,
        g.grupo_nombre AS grupo,
        g.grupo_color AS color,
        u.usuario_activo AS activo,
        u.usuario_nick AS nick,
        u.usuario_email AS email,
        u.usuario_avatar AS avatar,
        u.usuario_firma AS firma,
        u.usuario_nombre AS nombre,
        u.usuario_apellido AS apellido,
        u.usuario_ciudad AS ciudad,
        u.usuario_pais AS pais,
        u.usuario_sexo AS sexo,
        u.usuario_fecha_nacimiento AS nacimiento,
        u.usuario_fecha_ingreso AS ingreso,
        u.usuario_ip AS ip,
        u.usuario_skype AS skype,
        u.usuario_gametag AS gametag,
        u.usuario_reputacion AS reputacion,
        u.usuario_nivel AS nivel,
        u.usuario_dinero AS dinero,
        u.usuario_facebook AS facebook,
        u.usuario_twitter AS twitter,
        u.usuario_ultima_pag AS ultimapagina,
        u.usuario_ultima_vis AS ultimavisita,
        u.usuario_ultimo_post AS ultimopost,
        u.usuario_ultima_adv AS advertencia,
        u.usuario_sitio_web AS web,
        u.usuario_alert AS alerta,
        u.usuario_opciones AS opciones
        FROM usuarios AS u
        INNER JOIN grupos AS g ON (g.grupo_id = u.usuario_grupo)
        WHERE u.usuario_nick_clean = ?
        ";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$nick,PDO::PARAM_STR);
        $res->execute();
        
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
        }
        $rowcount = $res->rowCount();
        if($rowcount > 0){
            return $datos[0];
            parent::closeCon();
        } else {
            header("Location: ".$this->whereuFrom());
        }
    }
    //acualizar firma
    function updateSignature($value,$nick){
        parent::setNames();
        $sql = "UPDATE usuarios SET usuarios.usuario_firma = ? WHERE usuarios.usuario_nick_clean = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,htmlspecialchars(addslashes(stripslashes(trim($value))),ENT_QUOTES),PDO::PARAM_STR);
        $res->bindParam(2,$nick,PDO::PARAM_STR);
        $res->execute();
        header("Location: ".$this->getUrl()."/perfil/".$nick);
    }
    
    function updateContact($values,$nick){
        $chkgametag = $values['opciones']['chkgametag'];
        $chkskype = $values['opciones']['chkskype'];
        $chkfacebook = $values['opciones']['chkfacebook'];
        $chktwitter = $values['opciones']['chktwitter'];
        $chkweb = $values['opciones']['chkweb'];
        $todo = $chkgametag.$chkskype.$chkfacebook.$chktwitter.$chkweb;
        parent::setNames();
        $sql = "UPDATE usuarios
        SET 
        usuarios.usuario_gametag = ?,
        usuarios.usuario_skype = ?,
        usuarios.usuario_facebook = ?,
        usuarios.usuario_twitter = ?,
        usuarios.usuario_sitio_web = ?,
        usuarios.usuario_opciones = ?
        WHERE usuarios.usuario_nick_clean = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$values['gametag'],PDO::PARAM_STR);
        $res->bindParam(2,$values['skype'],PDO::PARAM_STR);
        $res->bindParam(3,$values['facebook'],PDO::PARAM_STR);
        $res->bindParam(4,$values['twitter'],PDO::PARAM_STR);
        $res->bindParam(5,$values['web'],PDO::PARAM_STR);
        $res->bindParam(6,$todo,PDO::PARAM_STR);
        $res->bindParam(7,$nick,PDO::PARAM_STR);
        $res->execute();
        header("Location: ".$this->getUrl()."/perfil/".$nick);
    }
}