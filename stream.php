<?php
session_start();
ob_start();
require_once('class/system.class.php');
require_once('class/stream.class.php');

ob_end_flush();