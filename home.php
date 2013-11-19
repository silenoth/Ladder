<?php
require_once("class/system.class.php");
require_once("class/home.class.php");
$home = new lsHome();

$a = $home->getNews(1);
 for($i=0;$i<sizeof($a);$i++){
    echo '<pre>'
    . $a[$i]['titulo'].'<br />'
    . $a[$i]['imagen'].'<br />'
    . $a[$i]['preview'].'<br />'
    . $a[$i]['contenido'].'<br />'
    . $a[$i]['autor'].'<br />'
    . $a[$i]['fecha'].'<br />'
    . $a[$i]['categoria'].'<br />'
    . $a[$i]['activa'].'<br />';
 }
