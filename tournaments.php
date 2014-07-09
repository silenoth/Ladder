<?php
session_start();
ob_start();
require_once("class/system.class.php");
require_once("class/bracket.class.php");
$bracket = new lsBracket();

$bracket->showTournaments();
if (!empty($_SESSION['errorlogin'])) {
    unset($_SESSION['errorlogin']);
}
ob_end_flush();