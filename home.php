<?php
session_start();
ob_start();
require_once("class/system.class.php");
require_once("class/home.class.php");
$home = new lsHome();
$home->whereuFrom();
$home->showHome();

if(!empty($_SESSION['usuario'])){
    if(isset($_GET['code'])){
        $home->updateTwichChannel($_GET['code'],$_SESSION['usuario']);
        require('lib/twitch_interface.php');
        // Instancize the class as an object
        $interface = new twitch;
        $testToken = $interface->generateToken($_GET['code']);
        print_r($testToken);
    }
}

ob_end_flush();
//debug
//$array = $home->getFoldersFromTemplate();
//for($i=0;$i<sizeof($array);$i++){
//    echo $array[$i].'<br />';
//} 
//
//echo $home->templateFolder();
//echo '<pre>';   
//print_r($home->last3Preview());
//print_r($home->getNews());
