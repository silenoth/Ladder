<?php
session_start();
ob_start();
require_once('class/system.class.php');
require_once('class/forum.class.php');
$threads = new lsForums();
$threads->showThreads();

if (isset($_POST)) {
	if (isset($_POST['ok']) && $_POST['ok'] == 1) {
		$datos = array(
			'titulo' => $_POST['txttitulo'],
			'contenido' => $_POST['txtnuevotema'],
			'icono' => $_POST['rdicono'],
			'fijar' => isset($_POST['chkfijar']) ? $_POST['chkfijar'] : 0,
			'cerrar' => isset($_POST['chkcerrar']) ? $_POST['chkcerrar'] : 0,
			'mostrar' => isset($_POST['chkmostrar']) ? $_POST['chkmostrar'] : 0
		);
		$threads->addThread($datos);
	}
}
ob_end_flush();