<?php
session_start();
ob_start();
include_once("class/system.class.php");
include_once("class/forum.class.php");
$topics = new lsForums();
$topics->showTopics();
if (!empty($_SESSION['errorlogin'])) {
    unset($_SESSION['errorlogin']);
}
if (!empty($_SESSION['votook'])) {
    unset($_SESSION['votook']);
}
if (isset($_POST)) {
	$tema = $_GET['id'];

	if (isset($_POST['hvotomas']) && $_POST['hvotomas'] == 1) {
		$usuario = $_SESSION['usuario'];
		$topics->addVotePlus($tema, $usuario);
		exit();
	}
}
ob_end_flush();