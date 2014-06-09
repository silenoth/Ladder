<?php

class lsAdmin extends lsSystem {

    function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }
    }

    function showAdmin(){
        $datos = array(
            'cat' => $this->getCategories(),
            'torneos' => $this->getTournaments()
        );
        $this->loadTemplate('admin',$datos);
    }

    function addNews($datos){
        $image = $datos['imagen'];
        if (!empty($imagen)) {
            $cad = $this->randString(10,4);
            $tamano = $image['size']; // Leemos el tamaño del fichero
            $tamaño_max="50000000000"; // Tamaño maximo permitido
            if( $tamano < $tamaño_max){ // Comprobamos el tamaño
                $destino = 'images/news' ; // Carpeta donde se guarda
                $sep=explode('image/',$image['type']); // Separamos image/
                $tipo=$sep[1]; // Optenemos el tipo de imagen que es
                if($tipo == "gif" || $tipo == "jpeg" || $tipo == "bmp" || $tipo == "png"){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas tipos de imagen
                    move_uploaded_file ($image['tmp_name'], $destino . '/' .$cad.'.'.$tipo);  // Subimos el archivo
                    $imagen = $cad.'.'.$tipo;
                }
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
        header("Location ".$this->whereuFrom());
    }

    function getCategories(){
        parent::setNames();
        $sql = "SELECT nc.cat_id AS id, nc.cat_nombre AS nombre FROM noticias_categorias AS nc";
        $res = $this->con->query($sql);
        $res->execute();
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
        }
        return $datos;
    }

    function addTournaments($torneo){
        $ds = array(
            't_logo' => 'default.jpg',
            't_juego' => 'Hearthstone',
            't_ubicacion' => 'Antofagasta',
            't_ganadores' => 3,
            't_modo' => 0
        );
        parent::setNames();
        $sql = "INSERT INTO torneos (
        torneos.tnmt_autor,
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
        torneos.tnmt_modo,
        torneos.tnmt_activo) VALUES (?,?,?,?,?,NOW(),?,?,?,?,?,?,?)";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$torneo['t_autor'],PDO::PARAM_STR);
        $res->bindParam(2,$torneo['t_titulo'],PDO::PARAM_STR);
        $res->bindParam(3,$ds['t_logo'],PDO::PARAM_STR);
        $res->bindParam(4,$torneo['t_descripcion'],PDO::PARAM_STR);
        $res->bindParam(5,$ds['t_juego'],PDO::PARAM_STR);
        $res->bindParam(6,$ds['t_ubicacion'],PDO::PARAM_STR);
        $res->bindParam(7,$torneo['t_subida'],PDO::PARAM_INT);
        $res->bindParam(8,$torneo['t_bajada'],PDO::PARAM_INT);
        $res->bindParam(9,$ds['t_ganadores'],PDO::PARAM_INT);
        $res->bindParam(10,$torneo['t_equipos'],PDO::PARAM_INT);
        $res->bindParam(11,$ds['t_modo'],PDO::PARAM_INT);
        $res->bindParam(12,$torneo['t_activo'],PDO::PARAM_INT);
        $res->execute();
        header("Location: ".$this->whereuFrom());
    }
}