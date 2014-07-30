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

    public function showBrackets(){
        $id = $_GET['id'];
        $link = $_GET['link'];
        $bracket = $this->getTournament($id,$link);
        $datos = array(
            'mensajes' => array(
                    'success' => !empty($_SESSION['success']) ? true : false
                ),
            'bracket' => array(
                'id' => $bracket['id'],
                'autor' => $bracket['autor'],
                'link' => $bracket['link'],
                'titulo' => $bracket['titulo'],
                'logo' => $bracket['logo'],
                'descripcion' => str_replace(PHP_EOL,'<br />',$bracket['descripcion']),
                'juego' => $bracket['juego'],
                'fecha' => $bracket['fecha'],
                'ubicacion' => $bracket['ubicacion'],
                'subida' => $bracket['subida'],
                'bajada' => $bracket['bajada'],
                'ganadores' => $bracket['ganadores'],
                'equipos' => $bracket['equipos'],
                'registrados' => $bracket['registrados'],
                'confirmados' => $bracket['confirmados'],
                'modo' => $bracket['modo'],
                'activo' => $bracket['activo'],
                'terminado' => $bracket['terminado']
            ),
            'datos' => $this->getUserInTourney($id),
            'estado' => !empty($_SESSION['usuario']) ? $this->getIfUserAreIn($id,$_SESSION['usuario']):$_SESSION['invitado']

        );
        $this->loadTemplate('brackets', $datos);
    }

    //Verificar si usuario esta en el torneo
    private function getIfUserAreIn($id,$user){
        $user = $this->getIdUser($user);
        parent::setNames();
        $sql = "SELECT ut.ut_id_usuario
        FROM usuario_torneo AS ut
        WHERE ut.ut_id_torneo = ? AND ut.ut_id_usuario = ?";
        $res = $this->con->prepare($sql);
        $res->bindParam(1,$id,PDO::PARAM_INT);
        $res->bindParam(2,$user,PDO::PARAM_INT);
        $res->execute();
        while($row = $res->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $row;
        }
        $rc = $res->rowCount();
        if($rc > 0) {
            return true;
        }
    }

    //buscar usuario en torneo
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

    //posicion aleatoria e ingreso de usuario al torneo
    function randomIn($id,$link,$user){
        //obtenemos la cantidad de equipos
        $bracket = $this->getTournament($id,$link);

        inicio:
        //numero aleatorio
        $random = mt_rand(1, $bracket['equipos']);
        //obtenemos las posiciones registradas
        $sqla = "SELECT
               	ut.ut_f".$bracket['equipos']." AS f".$bracket['equipos']."
                FROM
               	usuario_torneo AS ut
                WHERE
               	(ut.ut_id_torneo = ?)";
        $ra = $this->con->prepare($sqla);
        $ra->bindParam(1,$id,PDO::PARAM_INT);
        $ra->execute();

        $datos = array();
        while($rowa = $ra->fetch(PDO::FETCH_ASSOC)){
            $datos[] = $rowa;
        }
        //leemos las posiciones
        for($i=0;$i<count($datos);$i++){
            //si la posicion esta en el arreglo, volvemos a ejecutar inicio
            if(in_array($random,$datos[$i])) goto inicio;
        }
        //$this->closeCon();
        //si la posicion no esta en el arreglo insertamos la nueva posicion en la bd
        $sqlb = "INSERT INTO usuario_torneo (
        usuario_torneo.ut_id_torneo,
        usuario_torneo.ut_id_usuario,
        usuario_torneo.ut_id_actual,
        usuario_torneo.ut_f".$bracket['equipos']."
        ) VALUES (?,?,?,?)";
        $rb = $this->con->prepare($sqlb);
        $rb->bindParam(1,$id,PDO::PARAM_INT);
        $rb->bindParam(2,$user,PDO::PARAM_INT);
        $rb->bindParam(3,$bracket['equipos'],PDO::PARAM_INT);
        $rb->bindParam(4,$random,PDO::PARAM_INT);
        $rb->execute();
        //seleccionamos el numero actual del contador
        $sqlc = "SELECT t.tnmt_registrados_cont AS contador
                FROM torneos AS t
                WHERE t.tnmt_id = ? AND t.tnmt_link = ?";
        $rc = $this->con->prepare($sqlc);
        $rc->bindParam(1,$id,PDO::PARAM_INT);
        $rc->bindParam(2,$link,PDO::PARAM_STR);
        $rc->execute();

        while($rowc = $rc->fetch(PDO::FETCH_ASSOC)){
            $d[] = $rowc;
        }
        //aumentamos el contador en 1
        $cont = $d[0]['contador']+1;
        //actualizamos el contador en la bd
        $sqld = "UPDATE torneos
        SET tnmt_registrados_cont = ?
        WHERE tnmt_id = ? AND tnmt_link = ?";
        $rd = $this->con->prepare($sqld);
        $rd->bindParam(1,$cont,PDO::PARAM_INT);
        $rd->bindParam(2,$id,PDO::PARAM_INT);
        $rd->bindParam(3,$link,PDO::PARAM_STR);
        $rd->execute();
        
        $array = array(
            'envia' => 0,
            'recibe' => $user,
            'prioridad' => 1,
            'icono' => 'warning',
            'titulo' => 'Confirmar participacion',
            'mensaje' => 'Hola no olvides confirmar participacion',
            'estado' => 0
        );
        
        $this->sendPrivateMessage($array);
        
        $sqle = "SELECT u.usuario_email AS email,
                u.usuario_nick AS nick,
                u.usuario_nick_clean AS clean
                FROM usuarios AS u WHERE u.usuario_id = ?";
        $re = $this->con->prepare($sqle);
        $re->bindParam(1,$user,PDO::PARAM_STR);
        $re->execute();
        while($rowe = $re->fetch(PDO::FETCH_ASSOC)){
            $datose[] = $rowe;
        }
        $this->sendEmail(
        $datose[0]['email'],
        $array['titulo'],
        'Haz recibido un nuevo mensaje en tu bandeja de entrada. click <a href="{url}/perfil/'. $datose[0]['clean'] .'">aqui</a> para ver el mensaje.<br/> Atte. el staff de {titulo}'
        );
        $_SESSION['success'] = 'torneo';

        header("Location: ".$this->whereuFrom());
    }
}