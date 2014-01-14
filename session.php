<?php
session_start();
require('class/system.class.php');
$session = new lsSystem();
if($_POST) {
    $datos = array(
        'nick' => $_POST['nick'],
        'pass' => md5($_POST['pass'])
    );
    $session->sessionStart($datos['nick'],$datos['pass']);
} else {
    if($_GET['session'] == "destroy"){
        unset($_SESSION['usuario']);
    }
    header("Location: ".$session->whereuFrom());
}