<?php
class lsForums extends lsSystem {
	function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }
    }
/* Inicio Vistas */
	public function showForums(){
		$datos = array(
			'foros' => $this->getForums(),
			'categorias' => $this->getForumsCategories()
			);
		$this->loadTemplate('forums',$datos);
	}

	public function showThreads(){
		$id = $_GET['id'];
		$titulo = $_GET['title'];

		$datos = array(
			'categoria' => $this->getTitleCategories($id),
			'temas' => $this->getThreads($id,$titulo)
			);
		$this->loadTemplate('threads', $datos);
	}

	public function showTopics(){
		$id = $_GET['id'];
		$titulo = $_GET['title'];
		$tema = $this->getTopic($id,$titulo);
		$resp = '';
		$repmax = $this->getMaxRepLvl();
		$expl = explode(';',$tema['opciones']);
		$datos = array(
			'tema' => array(
				'id' 			=> $tema['id'],
				'tituloclean' 	=> $tema['tituloclean'],
				'titulo' 		=> $tema['titulo'],
				'contenido'	 	=> $this->bbcode($tema['contenido']),
				'fecha' 		=> $tema['fecha'],
				'icono' 		=> $tema['icono'],
				'contador' 		=> $tema['contador'],
				'rank' 			=> $tema['rank'],
				'activo' 		=> $tema['activo'],
				'fijo' 			=> $tema['fijo'],
				'ultimopost' 	=> $tema['ultimopost'],
				'cerrado' 		=> $tema['cerrado'],
				'votos'			=> !empty($_SESSION['usuario']) ? $this->getVotesInTopics($id,$resp,$_SESSION['usuario']):null,
				'votook'		=> !empty($_SESSION['votook']) ? true:false,
				'autor' 		=> array(
					'nick' 			=> $tema['nick'],
					'perfil' 		=> $tema['autorclean'],
					'avatar' 		=> $tema['avatar'],
					'firma' 		=> $this->bbcode($this->getSmilies($tema['firma'])),
					'nivel' 		=> $repmax['maxlvl'] * $tema['nivel'] / 100 * 0.01,
					'reputacion' 	=> $repmax['maxrep'] * $tema['reputacion'] / 100 * 0.01,
					'grupo' 		=> $tema['grupo'],
					'color' 		=> $tema['color'],
					'online' 		=> $this->getUserOnline($tema['nick']),
					'gametag'		=> $tema['gametag'],
					'skype'			=> $tema['skype'],
					'facebook'		=> $tema['facebook'],
					'twitter'		=> $tema['twitter'],
					'web'			=> $tema['web'],
					'optgametag' 	=> $expl[0],
					'optskype' 		=> $expl[1],
					'optfacebook' 	=> $expl[2],
					'opttwitter' 	=> $expl[3],
					'optweb' 		=> $expl[4]
					)
				)
			);

		$this->loadTemplate('topics', $datos);
	}
/* Fin Vistas */

	private function getForums(){
		$sql = "SELECT
		f.foro_id AS id,
		f.foro_nombre AS nombre,
		f.foro_activo AS activo
		FROM foros AS f";
		$res = $this->con->query($sql);
		$res->execute();

		while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
			$datos[] = $row;
		}

		$rc = $res->rowCount();
		if ($rc > 0) {
			return $datos;
		} else {
			return false;
		}
	}
	//categorias o subforos
	private function getForumsCategories(){
		parent::setNames();
		$sql = "SELECT
		cf.cat_foro_id AS id,
		cf.cat_foro_foro AS foro,
		cf.cat_foro_nombre_clean AS nombreclean,
		cf.cat_foro_nombre AS nombre,
		cf.cat_foro_descripcion AS descripcion,
		cf.cat_foro_icono AS icono,
		cf.cat_foro_activo AS activo,
		cf.cat_foro_ultimo_post_id AS ultimopostid,
		cf.cat_foro_ultimo_post_clean AS ultimopostclean,
		cf.cat_foro_ultimo_post AS ultimopost,
		cf.cat_foro_ultimo_post_nick AS nickclean,
		cf.cat_foro_ultimo_post_fecha AS ultimopostfecha,
		u.usuario_nick AS nick,
		u.usuario_avatar AS avatar,
		(SELECT COUNT(tf.tema_id) FROM temas_foros AS tf WHERE tf.tema_cat_id = cf.cat_foro_id) AS totaltemas,
		(SELECT COUNT(rf.resp_id) FROM respuestas_foros AS rf INNER JOIN temas_foros AS tf ON (rf.resp_id_tema = tf.tema_id) WHERE rf.resp_id_tema = tf.tema_id) AS totalrespuestas
		FROM categorias_foros AS cf
		LEFT JOIN usuarios AS u ON (cf.cat_foro_ultimo_post_nick = u.usuario_nick_clean)";
		$res = $this->con->query($sql);
		$res->execute();

		while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
			$datos[] = $row;
		}

		$rc = $res->rowCount();
		if ($rc > 0) {
			return $datos;
		} else {
			return false;
		}
	}

	private function getThreads($id,$titulo){
		parent::setNames();
		$sql = "SELECT
		t.tema_id AS id,
		t.tema_creador AS autor,
		t.tema_titulo_clean AS tituloclean,
		t.tema_titulo AS titulo,
		t.tema_contenido AS contenido,
		t.tema_fecha AS fecha,
		t.tema_icono AS icono,
		t.tema_contador AS contador,
		t.tema_rank AS rank,
		t.tema_activo AS activo,
		t.tema_pin AS fijo,
		t.tema_ultimo_post AS ultimo,
		t.tema_respuestas AS respuestas,
		t.tema_cerrado AS cerrado,
		u.usuario_nick AS nick,
		cf.cat_foro_nombre_clean AS nombreclean,
		cf.cat_foro_nombre AS nombre
		FROM temas_foros AS t
		INNER JOIN usuarios AS u ON (u.usuario_nick_clean = t.tema_creador)
		INNER JOIN categorias_foros AS cf ON (cf.cat_foro_id = t.tema_cat_id)
		WHERE cf.cat_foro_id = ? AND cf.cat_foro_nombre_clean = ?
		ORDER BY t.tema_pin DESC,t.tema_id DESC";

		$res = $this->con->prepare($sql);
		$res->bindParam(1,$id,PDO::PARAM_INT);
		$res->bindParam(2,$titulo,PDO::PARAM_STR);
		$res->execute();

		while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
			$datos[] = $row;
		}

		$rc = $res->rowCount();
		if ($rc > 0) {
			return $datos;
		} else {
			return false;
		}
	}

	private function getTitleCategories($id){
		parent::setNames();
		$sql = "SELECT cf.cat_foro_nombre AS nombre FROM categorias_foros AS cf WHERE cf.cat_foro_id = ?";
		$res = $this->con->prepare($sql);
		$res->bindParam(1,$id,PDO::PARAM_INT);
		$res->execute();

		while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
			$datos[] = $row;
		}
		$rc = $res->rowCount();

		if ($rc > 0) {
			return $datos[0];
		} else {
			return  false;
		}
	}

	public function addThread($datos){
		$user = $this->getNickClean($_SESSION['usuario']);
		$titulo = $this->cleanString($datos['titulo']);
		$sql = "INSERT INTO
		temas_foros(
			temas_foros.tema_cat_id,
			temas_foros.tema_creador,
			temas_foros.tema_titulo_clean,
			temas_foros.tema_titulo,
			temas_foros.tema_contenido,
			temas_foros.tema_fecha,
			temas_foros.tema_icono,
			temas_foros.tema_contador,
			temas_foros.tema_activo,
			temas_foros.tema_pin,
			temas_foros.tema_cerrado
			) VALUES (?, ?, ?, ?, ?, NOW(), ?, 0, ?, ?,?)";
		$res = $this->con->prepare($sql);
		$res->bindParam(1,$_GET['id'],PDO::PARAM_INT);
		$res->bindParam(2,$user,PDO::PARAM_STR);
		$res->bindParam(3,$titulo,PDO::PARAM_STR);
		$res->bindParam(4,$datos['titulo'],PDO::PARAM_STR);
		$res->bindParam(5,$datos['contenido'],PDO::PARAM_STR);
		$res->bindParam(6,$datos['icono'],PDO::PARAM_STR);
		$res->bindParam(7,$datos['mostrar'],PDO::PARAM_INT);
		$res->bindParam(8,$datos['fijar'],PDO::PARAM_INT);
		$res->bindParam(9,$datos['cerrar'],PDO::PARAM_STR);
		$res->execute();

		$id = $this->con->lastInsertId();
		$update = "UPDATE categorias_foros SET
		cat_foro_ultimo_post_id = ?,
		cat_foro_ultimo_post_clean = ?,
		cat_foro_ultimo_post = ?,
		cat_foro_ultimo_post_nick = ?,
		cat_foro_ultimo_post_fecha = NOW()
		WHERE cat_foro_id = ?";
		$exe = $this->con->prepare($update);
		$exe->bindParam(1, $id, PDO::PARAM_INT);
		$exe->bindParam(2, $titulo, PDO::PARAM_STR);
		$exe->bindParam(3, $datos['titulo'],PDO::PARAM_STR);
		$exe->bindParam(4, $user, PDO::PARAM_STR);
		$exe->bindParam(5, $_GET['id'],PDO::PARAM_INT);
		$exe->execute();

		header("Location: ". $this->whereuFrom());
	}

	private function getTopic($id,$titulo){
		parent::setNames();
		$sql = "SELECT
			tf.tema_id AS id,
			tf.tema_creador AS autorclean,
			tf.tema_titulo_clean AS tituloclean,
			tf.tema_titulo AS titulo,
			tf.tema_contenido AS contenido,
			tf.tema_fecha AS fecha,
			tf.tema_icono AS icono,
			tf.tema_contador AS contador,
			tf.tema_rank AS rank,
			tf.tema_activo AS activo,
			tf.tema_pin AS fijo,
			tf.tema_ultimo_post AS ultimopost,
			tf.tema_cerrado AS cerrado,
			u.usuario_nick AS nick,
			u.usuario_avatar AS avatar,
			u.usuario_firma AS firma,
			u.usuario_reputacion AS reputacion,
			u.usuario_nivel AS nivel,
			u.usuario_gametag AS gametag,
			u.usuario_skype AS skype,
			u.usuario_facebook AS facebook,
			u.usuario_twitter AS twitter,
			u.usuario_sitio_web AS web,
			u.usuario_opciones AS opciones,
			g.grupo_nombre AS grupo,
			g.grupo_color AS color
			FROM temas_foros AS tf
			INNER JOIN usuarios AS u ON (u.usuario_nick_clean = tf.tema_creador)
			INNER JOIN grupos AS g ON (g.grupo_id = u.usuario_grupo)
			WHERE tf.tema_id = ? AND tf.tema_titulo_clean = ?";

			$res = $this->con->prepare($sql);
			$res->bindParam(1,$id,PDO::PARAM_INT);
			$res->bindParam(2,$titulo,PDO::PARAM_STR);
			$res->execute();

			while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
				$datos[] = $row;
			}

			$rc = $res->rowCount();
			if ($rc > 0) {
				return $datos[0];
			} else {
				return false;
			}
	}

	private function getVotesInTopics($tema=null, $resp=null, $id){
		$sql = "SELECT
			rt.rank_usuario
			FROM rank_temas AS rt
			WHERE rt.rank_tema = ? OR rt.rank_respuesta = ? AND rt.rank_usuario = ?";

		$res = $this->con->prepare($sql);
		$res->bindParam(1,$tema,PDO::PARAM_INT);
		$res->bindParam(2,$resp,PDO::PARAM_INT);
		$res->bindParam(3,$id,PDO::PARAM_STR);
		$res->execute();

		$rc = $res->rowCount();

		if ($rc > 0) {
			return  true;
		}
	}

	public function addVotePlus($tema, $usuario){
		$sql = "INSERT INTO rank_temas (rank_tema, rank_usuario) VALUES (?, ?)";
		$res = $this->con->prepare($sql);
		$res->bindParam(1,$tema,PDO::PARAM_INT);
		$res->bindParam(2,$usuario,PDO::PARAM_STR);
		$res->execute();

		$_SESSION['votook'] = 'ok';
		header("Location: ".$this->whereuFrom());
	}
}