<?php
session_start();
ob_start();
require_once("class/system.class.php");
require_once("class/register.class.php");

$reg = new lsRegister();
$reg->showRegister();

if($_POST){
    if($_POST['name'] == ""){
        $_SESSION['error'] = 1;
    } else {
        unset($_SESSION['error']);
    }
    if ($_POST['email'] == "") {
        $_SESSION['error'] = 2;
    }
    $array = array(
        'name'   => $_POST['name'],
        'email'  => $_POST['email'],
        'nick'   => $_POST['nick'],
        'pass'   => $_POST['pass']
        );
    if ($_POST['captcha'] == $_SESSION['captcha']){
        $reg->register($array['name'], $array['email'], $array['nick'], $array['pass']);  
    } else {
        echo "Captcha malo rectm";
    }
    
}
ob_end_flush();