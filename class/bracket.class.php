<?php

class lsBracket extends lsSystem {

    function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }
    }

    //api challonge
    // private function getTournament(){
    //     include('lib/BinaryBeast.php');
    //     //creamos nueva instancia api binarybeast
    //     $bb = new BinaryBeast();
    //     $bb->enable_dev_mode();
    //     $bb->disable_ssl_verification();
    //     $tournament = $bb->tournament->list_my(null, 300, true);

    //     //var_dump($tournament);
    //     return $tournament;

    // }

    function showTournaments(){
        $array = $this->getTournament();
        $datos = array(
            'torneo' => $array
        );
        $this->loadTemplate('tournaments', $datos);
    }

    // private function getBrackets($id){
    //     include('lib/BinaryBeast.php');
    //     //nueva instancia
    //     $bb = new BinaryBeast();
    //     $bb->enable_dev_mode();
    //     $bracket = $bb->tournament($id);
    //     //var_dump($bracket);
    //     return $bracket;
    // }
    private function getTournament($id){
        parent::setNames();
        $sql = "SELECT
            t.tnmt_id AS id,
            t.tnmt_autor AS autor,
            t.tnmt_titulo AS titulo,
            t.tnmt_logo AS logo,
            t.tnmt_descripcion AS descripcion,
            t.tnmt_juego AS juego,
            t.tnmt_fecha AS fecha,
            t.tnmt_ubicacion AS ubicacion,
            t.tnmt_subida_replays AS subida,
            t.tnmt_descarga_replays AS bajada,
            t.tnmt_ganadores AS ganadores,
            t.tnmt_max_equipos AS equipos,
            t.tnmt_modo AS modo,
            t.tnmt_activo AS activo
        FROM torneos AS t
        WHERE t.tnmt_id = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$id,PDO::PARAM_INT);
        $res->execute();

        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
        }
        return $datos[0];
    }

    function showBrackets(){
        $id = $_GET['id'];
        $datos = array(
            'bracket' => $this->getTournament($id)
        );
        $this->loadTemplate('brackets', $datos);
    }
}