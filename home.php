<?php
require_once("class/system.class.php");
require_once("class/home.class.php");
$home = new lsHome();

//$array = $home->getFoldersFromTemplate();
//for($i=0;$i<sizeof($array);$i++){
//    echo $array[$i].'<br />';
//} 
//
//echo $home->templateFolder();    

$a = array('news' => $home->getNews(1));

$home->loadTemplate('test2', 'header', 'footer',array($a));