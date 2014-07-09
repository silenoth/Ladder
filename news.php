<?php
session_start();
require_once("class/system.class.php");
require_once("class/news.class.php");

$news = new lsNews();
$news->showNews();
if (!empty($_SESSION['errorlogin'])) {
    unset($_SESSION['errorlogin']);
} 
$news->whereuFrom();
//debug

//print_r($news->getNewsById(2));