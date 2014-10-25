<?php
session_start();
ob_start();
require_once("class/system.class.php");
require_once("class/bracket.class.php");
$bracket = new lsBracket();
$bracket->showBrackets();
echo $_SESSION['usuario'];
if (!empty($_SESSION['success'])) {
    unset($_SESSION['success']);
}
if(isset($_POST)){
    if(isset($_POST['ins_ok']) and $_POST['ins_ok'] == 1){
        $user = $bracket->getIdUser($_SESSION['usuario']);
        $test = $bracket->randomIn($_GET['id'],$_GET['link'],$user);
        exit();
    }
}
$bracket->closeCon();
ob_end_flush();