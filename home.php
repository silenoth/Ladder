<?php
session_start();
require_once("class/system.class.php");
require_once("class/home.class.php");
$home = new lsHome();
$home->whereuFrom();
$home->showHome();


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
