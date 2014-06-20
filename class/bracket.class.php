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
        
        $datos = array(
            'torneos' => $this->getTournaments()
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
    private function getTournament($id,$link){
        parent::setNames();
        $sql = "SELECT
            t.tnmt_id AS id,
            t.tnmt_autor AS autor,
            t.tnmt_link AS link,
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
            t.tnmt_registrados_cont AS registrados,
            t.tnmt_confirmados_cont AS confirmados,
            t.tnmt_modo AS modo,
            t.tnmt_activo AS activo,
            t.tnmt_terminado AS terminado
        FROM torneos AS t
        WHERE t.tnmt_id = ? AND tnmt_link = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$id,PDO::PARAM_INT);
        $res->bindParam(2,$link,PDO::PARAM_STR);
        $res->execute();

        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
        }
        $rc = $res->rowCount();
        if($rc>0){
            return $datos[0];
        } else {
            return false;
        }
    }

    function showBrackets(){
        $id = $_GET['id'];
        $link = $_GET['link'];
        
        
        $datos = array(
            'bracket' => $this->getTournament($id,$link),
            'datos' => $this->getUserInTourney($id)
            
        );
//        var_dump($datos);
//        exit();        
        $this->loadTemplate('brackets', $datos);
    }
    
    private function getUserInTourney($torneo){
        $torneo = $_GET['id'];
        parent::setNames();
        $sql = "SELECT
            ut.ut_f128 AS f128,
            ut.ut_f64 AS f64,
            ut.ut_f32 AS f32,
            ut.ut_f16 AS f16,
            ut.ut_f8 AS f8,
            ut.ut_f4 AS f4,
            ut.ut_f2 AS f2,
            ut.ut_f1 AS f1,
            ut.ut_r128 AS r128,
            ut.ut_r64 AS r64,
            ut.ut_r32 AS r32,
            ut.ut_r16 AS r16,
            ut.ut_r8 AS r8,
            ut.ut_r4 AS r4,
            ut.ut_r2 AS r2,
            ut.ut_r1 AS r1,
            u.usuario_gametag AS gametag,
            u.usuario_nick_clean AS nick
            FROM usuario_torneo AS ut
            INNER JOIN usuarios AS u ON (u.usuario_id = ut.ut_id_usuario)
            WHERE ut.ut_id_torneo = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$torneo,PDO::PARAM_INT);
        $res->execute();
        
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
        }
        $rc = $res->rowCount();
        if ($rc > 0){
            return $datos;
        } else {
            return false;
        }
    }
}