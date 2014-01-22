<?php
session_start();
require_once("class/system.class.php");
require_once("class/profile.class.php");
$profile = new lsProfile();
$profile->whereuFrom();
$profile->showProfile();