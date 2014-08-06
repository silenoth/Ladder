<?php
session_start();
ob_start();
require_once('class/system.class.php');
require_once('class/forum.class.php');
$forum = new lsForums();
$forum->showForums();
ob_end_flush();