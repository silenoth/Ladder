<?php
session_start();
require('class/system.class.php');
$plugin = new lsSystem();
$rand = $plugin->randString(7, 'upper');
$_SESSION['captcha'] = $rand;
$plugin->captcha($rand);