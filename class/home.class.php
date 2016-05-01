<?php

class lsHome extends lsSystem {

    function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }
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

        if (!empty($array)) {
            return $array;
        } else {
            return null;
        }
        parent::closeCon();
    }



    private function pagNews($porPagina,$paginaActual){
        $paginaLista = array();
        $listaRegistro = array();

        $numPagina = (int)$paginaActual;

        if($numPagina<1){
            $numPagina = 1;
        }


        $offset = ($numPagina-1)*$porPagina;
        parent::setNames();
        $generalQuery = sprintf("SELECT SQL_CALC_FOUND_ROWS
                    n.noticia_id AS id,
                	n.noticia_titulo AS titulo,
                    n.noticia_titulo_clean AS url,
                	n.noticia_imagen AS imagen,
                	n.noticia_preview AS preview,
                	u.usuario_nick AS autor,
                	n.noticia_fecha AS fecha,
                	nc.cat_nombre AS categoria,
                	n.noticia_activa AS activa
                FROM
                	noticias AS n
                INNER JOIN usuarios AS u ON n.noticia_autor = u.usuario_nick_clean
                INNER JOIN noticias_categorias AS nc ON n.noticia_id_cat = nc.cat_id
                ORDER BY n.noticia_id DESC LIMIT %d, %d", $offset,$porPagina);
        //ejecutar consulta general
        $consultaFilas = $this->con->query($generalQuery);

        //consulta total de filas
        $totalQuery = "SELECT FOUND_ROWS() AS Total";
        //ejecutar consulta total de filas
        $consultaFilasTotal = $this->con->query($totalQuery);

        //totalfilas
        $rowsTotal = $consultaFilasTotal->fetch();

        //lista de registros
        while($listadoOK = $consultaFilas->fetch()){
            $listaRegistro[] =$listadoOK;
        }

        //total de filas
        $totalFilas = $rowsTotal['Total'];

        //calcular numero total de paginas
        $numPagina = ceil($totalFilas/$porPagina);

        $paginas = array();

        //links
        for($no=1;$no<=$numPagina;$no++){
            $paginas[$no] = $no;
        }

        $paginaLista['links'] = $paginas;
        $paginaLista['listaRegistro'] = $listaRegistro;
        $paginaLista['numPaginas'] = $numPagina;

        return $paginaLista;
    }

    // mostrar template home
    function showHome(){
        //mostrar por pagina
        $porPagina = 10;
        //comenzar en pagina
        $pagina = 1;
        if(isset($_GET['page']) && !empty($_GET['page']))
            $pagina = $_GET['page'];
            $lista = $this->pagNews($porPagina, $pagina);

            if($lista['links'] < $pagina){
                $pagina = $lista['links'];
                $lista = $this->pagNews($porPagina,$pagina);
            }

            $inicial = $pagina;
            $final = $pagina+5;

            $siguiente = $pagina+1;
            $anterior = $pagina-1;

            $array = array(
                'actual' => $pagina,
                'inicial' => $inicial,
                'final' => $final,
                'siguiente' => $siguiente,
                'anterior' => $anterior,
                'paginada' => $lista['listaRegistro'],
                'ultima' => $lista['links'],
                'paginas' => $lista['numPaginas'],
                'preview' => $this->last3Preview(),
                'interval' => $this->getInterval()
                );
            $this->loadTemplate('home', $array);
    }
}