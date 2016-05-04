<?php

class lsAdmin extends lsSystem {

    function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }
    }
    //Mostrar template
    function showAdmin(){
        $settings = $this->getSettingsDB();
        $slider = $this->getSlider();
        $datos = array(
            'cat' => $this->getCategories(),
            'torneos' => $this->getTournaments(),
            'conf' => array(
                'emailmsg' => $settings['emailmsg'],
                'lang' => $this->getLangFolders(),
                'dblang' => $settings['lang'],
                'template' => $this->getFoldersFromTemplate(),
                'dbtemplate' => $settings['template'],
                'titulositio' => $settings['title'],
                'slogan' => $settings['slogan'],
                'url' => $settings['url'],
                'email' => $settings['email'],
                'maxrep' => $settings['maxrep'],
                'maxlvl' => $settings['maxlvl'],
                'maxmoney' => $settings['maxmoney'],
                'intervalo' => $slider['intervalo']
            ),
            'addnewsok' => !empty($_SESSION['addnewsok']) ? true:false,
            'addtourneyok' => !empty($_SESSION['addtourneyok']) ? true:false,
            'deletetourney' => !empty($_SESSION['deletetourney']) ? true:false,
            'editmailmsgok' => !empty($_SESSION['editmailmsgok']) ? true:false
        );
        $this->loadTemplate('admin',$datos);
    }
    //Noticias
    function addNews($datos){
        $imagen = $datos['imagen'];
        if (!empty($imagen)) {
            $cad = $this->randString(10,4);
            include('upload.class.php');
            $handled = new upload($imagen);
            if($handled->uploaded){
                $handled->image_convert = 'jpg';
                $handled->file_new_name_body = $cad;
                $handled->image_resize = true;
                $handled->image_x = 260;
                $handled->image_ratio_y = true;
                $handled->process('images/news');
                $handled->clean();
                $imagen = $cad.'.jpg';
            } else {
                echo('error: '.$handled->error);
            }
        } else {
            $imagen = "default.jpg";
        }

        parent::setNames();
        $sql = "INSERT INTO noticias (
        noticias.noticia_id_cat,
        noticias.noticia_titulo_clean,
        noticias.noticia_titulo,
        noticias.noticia_imagen,
        noticias.noticia_preview,
        noticias.noticia_contenido,
        noticias.noticia_autor,
        noticias.noticia_fecha,
        noticias.noticia_activa
        ) VALUES (?,?,?,?,?,?,?,NOW(),?)";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$datos['categoria'],PDO::PARAM_INT);
        $res->bindParam(2,$this->cleanString($datos['titulo']),PDO::PARAM_STR);
        $res->bindParam(3,$datos['titulo'],PDO::PARAM_STR);
        $res->bindParam(4,$imagen,PDO::PARAM_STR);
        $res->bindParam(5,$datos['preview'],PDO::PARAM_STR);
        $res->bindParam(6,$datos['contenido'],PDO::PARAM_STR);
        $res->bindParam(7,$datos['autor'],PDO::PARAM_STR);
        $res->bindParam(8,$datos['activa'],PDO::PARAM_INT);
        $res->execute();
        $_SESSION['addnewsok'] = 'ok';
        header("Location ".$this->whereuFrom());
    }
    //categorias
    function getCategories(){
        parent::setNames();
        $sql = "SELECT nc.cat_id AS id, nc.cat_nombre AS nombre FROM noticias_categorias AS nc";
        $res = $this->con->query($sql);
        $res->execute();
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
        }
        if (!empty($datos)) {
            return $datos;
        } else {
            return null;
        }
    }
    //Torneos
    function addTournaments($torneo){
        $logo = $torneo['t_logo'];
        if (!empty($logo)) {
            $cad = $this->randString(10,4);
            include('upload.class.php');
            $handled = new upload($logo);
            if($handled->uploaded){
                $handled->image_convert = 'jpg';
                $handled->file_new_name_body = $cad;
                $handled->image_resize = true;
                $handled->image_x = 260;
                $handled->image_ratio_y = true;
                $handled->process('images/tourney/banners');
                $handled->clean();
                $logo = $cad.'.jpg';
            } else {
                echo('error: '.$handled->error);
            }
        } else {
            $logo = "default.jpg";
        }
        $ds = array(
            't_link' => $this->cleanString($torneo['t_titulo']),
            't_logo' => $torneo['t_logo'],
            't_juego' => 'Hearthstone',
            't_ubicacion' => 'Antofagasta',
            't_ganadores' => 3,
            't_modo' => 0
        );
        parent::setNames();
        $sql = "INSERT INTO torneos (
        torneos.tnmt_autor,
        torneos.tnmt_link,
        torneos.tnmt_titulo,
        torneos.tnmt_logo,
        torneos.tnmt_descripcion,
        torneos.tnmt_juego,
        torneos.tnmt_fecha,
        torneos.tnmt_ubicacion,
        torneos.tnmt_subida_replays,
        torneos.tnmt_descarga_replays,
        torneos.tnmt_ganadores,
        torneos.tnmt_max_equipos,
        torneos.tnmt_registrados_cont,
        torneos.tnmt_confirmados_cont,
        torneos.tnmt_modo,
        torneos.tnmt_activo,
        torneos.tnmt_terminado) VALUES (?,?,?,?,?,?,NOW(),?,?,?,?,?,0,0,?,?,0)";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$torneo['t_autor'],PDO::PARAM_STR);
        $res->bindParam(2,$ds['t_link'],PDO::PARAM_STR);
        $res->bindParam(3,$torneo['t_titulo'],PDO::PARAM_STR);
        $res->bindParam(4,$logo,PDO::PARAM_STR);
        $res->bindParam(5,$torneo['t_descripcion'],PDO::PARAM_STR);
        $res->bindParam(6,$ds['t_juego'],PDO::PARAM_STR);
        $res->bindParam(7,$ds['t_ubicacion'],PDO::PARAM_STR);
        $res->bindParam(8,$torneo['t_subida'],PDO::PARAM_INT);
        $res->bindParam(9,$torneo['t_bajada'],PDO::PARAM_INT);
        $res->bindParam(10,$ds['t_ganadores'],PDO::PARAM_INT);
        $res->bindParam(11,$torneo['t_equipos'],PDO::PARAM_INT);
        $res->bindParam(12,$ds['t_modo'],PDO::PARAM_INT);
        $res->bindParam(13,$torneo['t_activo'],PDO::PARAM_INT);
        $res->execute();
        $_SESSION['addtourneyok'] = 'ok';
        header("Location: ".$this->whereuFrom());
    }

    public function editEmailMsg($datos){
        $sql = "UPDATE ajustes SET ajustes.ajuste_email_mensaje = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$datos,PDO::PARAM_STR);
        $res->execute();

        $_SESSION['editmailmsgok'] = 'ok';
        header("Location: ". $this->whereuFrom());
    }

    private function deleteTourney($id){
        $sql1 = "DELETE * FROM torneos WHERE torneos.tnmt_id = ?";
        $r1 = $this->con->prepare($sql);
        $r1->bindParam(1,$id,PDO::PARAM_INT);
        $r1->execute();
        $sql2 = "DELETE * FROM usuario_torneos WHERE usuario_torneos.ut_id_torneo = ?";
        $r2 = $this->con->prepare($sq2);
        $r2->bindParam(1,$id,PDO::PARAM_INT);
        $r2->execute();
        $sql3 = "DELETE usuarios.usuario_torneo FROM usuarios WHERE usuarios.usuario_torneo = ?";
        $r3 = $this->con->prepare($sql);
        $r3->bindParam(1,$id,PDO::PARAM_INT);
        $r3->execute();
        $_SESSION['deletetourney'] = $id;
        header("Location: ".$this->whereuFrom());
    }

    private function getLangFolders(){
        $directorio = _LANGFOLDER._DS;
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

    private function getSettingsDB(){
        parent::setNames();
        $sql = "SELECT
                    a.ajuste_lang AS lang,
                    a.ajuste_template AS template,
                    a.ajuste_url AS url,
                    a.ajuste_app_id AS appid,
                    a.ajuste_plugins_folder AS plugindir,
                    a.ajuste_max_rep AS maxrep,
                    a.ajuste_max_lvl AS maxlvl,
                    a.ajuste_max_din AS maxmoney,
                    a.ajuste_twitch_client_id AS twitchid,
                    a.ajuste_twitch_client_secret AS twitchsecret,
                    a.ajuste_email AS email,
                    a.ajuste_email_titulo AS emailtitle,
                    a.ajuste_email_mensaje AS emailmsg,
                    a.ajuste_titulo AS title,
                    a.ajuste_slogan AS slogan
                FROM
                    ajustes AS a
                LIMIT 1";
        $res = $this->con->query($sql);
        $res->execute();

        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $datos[] = $row;
        }

        return $datos[0];
    }

}