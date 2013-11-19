<?php

class lsHome extends lsSystem {
    
    public function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }  
    }
    
    public function getNews($id){
        parent::setNames();
        $sql = "SELECT
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
                WHERE
                	n.noticia_id = ? ";
                    
        $res = $this->con->prepare($sql);

        if($res->execute(array($id))){
            while($row = $res->fetch()){
                $array[] = $row;
            }
            $rowcount = $res->rowCount();
            if($rowcount > 0){
                return $array;
                parent::closeCon();
            } else {
                parent::closeCon();
            } 
        }
    }
}