<?php
session_start();
ob_start();
require_once("class/system.class.php");
require_once("class/register.class.php");

$reg = new lsRegister();
$reg->whereuFrom();
$reg->showRegister();
if(empty($_SESSION['usuario'])){
    if($_POST){
        if(($_POST['name'] == "") or (count($_POST['name']) > 3) or (count($_POST['name']) > 40)){
            header("Location: register.php?error=name");
            exit();
        }
        if ($_POST['email'] == "") {
            header("Location: register.php?error=email");
            exit();
        }
        if ($_POST['nick'] == "") {
            header("Location: register.php?error=nick");
            exit();
        }
        if ($_POST['pass'] == "") {
            header("Location: register.php?error=pass");
            exit();
        }
        $array = array(
            'name'   => $_POST['name'],
            'email'  => $_POST['email'],
            'nick'   => $_POST['nick'],
            'pass'   => $_POST['pass']
            );
        if ($_POST['captcha'] == $_SESSION['captcha']){
            $reg->register($array['name'], $array['email'], $array['nick'], $array['pass']); 
            $_SESSION['registro'] = session_id();
        } else {
            header("Location: register.php?error=captcha");
            exit();
        }
        
    }
 } else {
    header("Location: ".$this->whereuFrom());    
  }
ob_end_flush();