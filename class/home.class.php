<?php

class lsHome extends lsSystem {
    
    function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }  
    }
    
    // mostrar template home
    function showHome(){
        $array = array(  
            'news' => $this->getNews(),
            'preview' => $this->last3Preview(),
            'interval' => $this->getInterval()               
            );
        $this->loadTemplate('home', $array);
    }
    
    //obtener ultimas 3 noticias
    private function last3Preview(){
        parent::setNames();
        $sql = "SELECT 
                    n.noticia_id AS id,
                    n.noticia_titulo AS titulo,
                    n.noticia_titulo_clean AS url,
                    n.noticia_imagen AS imagen,
                    n.noticia_preview AS preview,
                    n.noticia_fecha AS fecha,
                    u.usuario_nick AS nick
                FROM noticias AS n
                INNER JOIN usuarios AS u ON u.usuario_nick_clean = n.noticia_autor
                ORDER BY n.noticia_id DESC LIMIT 3";
                    
        $res = $this->con->query($sql);                         
        foreach($res->fetchAll(PDO::FETCH_ASSOC) as $row){
            $array[] = $row;
        }
        
        return $array;
        parent::closeCon();
    }
                     
    //ontener noticia
    private function getNews(){ 
        parent::setNames();
        $sql = "SELECT
                    n.noticia_id AS id,
                	n.noticia_titulo AS titulo,
                    n.noticia_titulo_clean AS url,
                	n.noticia_imagen AS imagen,
                	n.noticia_preview AS preview,
                	n.noticia_contenido AS contenido,
                	u.usuario_nick AS autor,
                	n.noticia_fecha AS fecha,
                	nc.cat_nombre AS categoria,
                	n.noticia_activa AS activa
                FROM
                	noticias AS n
                INNER JOIN usuarios AS u ON n.noticia_autor = u.usuario_nick_clean
                INNER JOIN noticias_categorias AS nc ON n.noticia_id_cat = nc.cat_id
                ORDER BY n.noticia_id DESC";
                    
        $res = $this->con->query($sql);
        $res->execute();
        
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
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