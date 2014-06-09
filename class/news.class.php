<?php

class lsNews extends lsSystem {
    function __construct() {
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }
    }

    //mostrar plantilla
    function showNews(){
        $id = $_GET['id'];
        $title = $_GET['title'];
        if (is_numeric($id)) {
            $array = array(
                'news' => $this->getNewsById($id,$title),
                'list' => $this->getLastNewsList(),
                'app' => $this->getAppId()
            );
            $this->loadTemplate('news', $array);
        } else {
            header("Location: ".$this->whereuFrom());
        }
    }

    //obtener noticias por id
    private function getNewsById($id,$title){
        parent::setNames();
        $sql="SELECT
                    n.noticia_id AS id,
                	n.noticia_titulo AS titulo,
                    n.noticia_titulo_clean AS url,
                	n.noticia_imagen AS imagen,
                	n.noticia_preview AS preview,
                	n.noticia_contenido AS contenido,
                	n.noticia_autor AS autor,
                	n.noticia_fecha AS fecha,
                	nc.cat_nombre AS categoria,
                	n.noticia_activa AS activa
                FROM
                	noticias AS n
                INNER JOIN noticias_categorias AS nc ON n.noticia_id_cat = nc.cat_id
                WHERE n.noticia_id = ? AND n.noticia_titulo_clean = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$id,PDO::PARAM_INT);
        $res->bindParam(2,$title,PDO::PARAM_STR);
        $res->execute();

        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            $array[] = $row;
        }
        $rowcount = $res->rowCount();
        if ($rowcount > 0) {
            return $array[0];
            parent::closeCon();
        } else {
            header("Location: ".$this->whereuFrom());
        }
    }

    //obtener ultimas 40 noticias
    private function getLastNewsList(){
        parent::setNames();
        $sql = "SELECT
                    n.noticia_id AS id,
                	n.noticia_titulo AS titulo,
                    n.noticia_titulo_clean AS url,
                	n.noticia_imagen AS imagen,
                	n.noticia_fecha AS fecha,
                	n.noticia_activa AS activa
                FROM
                	noticias AS n
                ORDER BY n.noticia_id DESC
                LIMIT 40";
        $res = $this->con->query($sql);
        $res->execute();
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $array[] = $row;
        }

        return $array;
        parent::closeCon();
    }
}
