<?php
session_start();
require('class/system.class.php');
$plugin = new lsSystem();
$rand = $plugin->randString(7, 1);
$_SESSION['captcha'] = $rand;
$plugin->captcha($rand);