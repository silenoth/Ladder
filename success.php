<?php
session_start();
require_once("class/system.class.php");
$ok = new lsSystem();
$ok->whereuFrom();
if(!empty($_SESSION['registro'])){
    unset($_SESSION['registro']);
    unset($_SESSION['captcha']);
    $ok->showSuccess();
} else {
    header("Location: ".$ok->whereuFrom());
}