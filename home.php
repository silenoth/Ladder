<?php
require_once("class/system.class.php");
require_once("class/home.class.php");
$home = new lsHome();
$a = array('hola' => array('mundo' => 'Hola mundo!!'));
$home->twigL('test2.tpl',array($a));