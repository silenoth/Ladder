<?php
require_once("class/system.class.php");
require_once("class/home.class.php");
$home = new lsHome();

echo $home->getLang();
