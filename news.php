<?php
session_start();
require_once("class/system.class.php");
require_once("class/news.class.php");

$news = new lsNews();
$news->showNews();
//debug
//print_r($news->getNewsById(2));