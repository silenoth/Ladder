<?php
class lsForums extends lsSystem {
	function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }
    }

	function showForums(){
		$datos = array(
			'foros' => $this->getForums(),
			'categorias' => $this->getForumsCategories()
			);
		$this->loadTemplate('forums',$datos);
	}

	function showThreads(){
		$id = $_GET['id'];
		$titulo = $_GET['title'];

		$datos = array(
			'categoria' => $this->getTitleCategories($id),
			'temas' => $this->getThreads($id,$titulo)
			);
		$this->loadTemplate('threads', $datos);
	}

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
		cf.cat_foro_temas AS temas,
		cf.cat_foro_respuestas AS respuestas,
		cf.cat_foro_icono AS icono,
		cf.cat_foro_activo AS activo
		FROM categorias_foros AS cf";
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
		t.tema_creador AS creador,
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
		WHERE cf.cat_foro_id = ? AND cf.cat_foro_nombre_clean = ?";

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

	function addThread($datos){
		$user = $_SESSION['usuario'];
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

		header("Location: ". $this->whereuFrom());
	}
}