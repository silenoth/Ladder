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
        
        $array = array(
            'news' => $this->getNewsById($id)
        );
        $this->loadTemplate('news', $array);
    }
    
    //obtener noticias por id
    private function getNewsById($id){
        parent::setNames();
        $sql="SELECT
                    n.noticia_id AS id,
                	n.noticia_titulo AS titulo,
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
                WHERE n.noticia_id = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$id,PDO::PARAM_INT);
        $res->execute();
        
        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            $array[] = $row;
        }
        $rowcount = $res->rowCount();
        if ($rowcount > 0) {
            return $array;
            parent::closeCon();
        } else {
            parent::closeCon();
        }
    }
}
