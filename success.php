<?php
session_start();
require_once("class/system.class.php");
$ok = new lsSystem();
if(!empty($_SESSION['registro'])){
    $ok->showSuccess();
    unset($_SESSION['registro']);
    unset($_SESSION['captcha']);
} else {
    header("Location: home.php");
}