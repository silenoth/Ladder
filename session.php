<?php
session_start();
ob_start();
require('class/system.class.php');
$session = new lsSystem();
//login normal
if($_POST) {
    $datos = array(
        'nick' => $_POST['nick'],
        'pass' => md5($_POST['pass'])
    );
    $session->sessionStart($datos['nick'],$datos['pass']);
    unset($_SESSION['invitado']);
} else {
    if($_GET['session'] == "destroy"){
        unset($_SESSION['usuario']);
    }
    header("Location: ".$session->whereuFrom());
}
//login twitch

ob_end_flush();