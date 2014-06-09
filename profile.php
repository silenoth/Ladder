<?php
session_start();
ob_start();
require_once("class/system.class.php");
require_once("class/profile.class.php");
$profile = new lsProfile();
//$profile->start();
$profile->whereuFrom();
$profile->showProfile();
if(isset($_POST)){
    if(isset($_POST['signature']) and $_POST['signature'] == 1){
        $profile->updateSignature($_POST['firma'],$_SESSION['usuario']);
        exit();        
    }
    
    if(isset($_POST['contact']) and $_POST['contact'] == 1) {
        $values = array(
        'gametag' => $_POST['gametag'],
        'skype' => $_POST['skype'],
        'facebook' => $_POST['facebook'],
        'twitter' => $_POST['twitter'],
        'web' => $_POST['web'],
        'opciones' => array(
                'chkgametag' => $_POST['chkgametag'].';',
                'chkskype' => $_POST['chkskype'].';',
                'chkfacebook' => $_POST['chkfacebook'].';',
                'chktwitter' => $_POST['chktwitter'].';',
                'chkweb' => $_POST['chkweb']
            )
        );
        $profile->updateContact($values,$_SESSION['usuario']);
        exit();
    }
}
//echo "La consulta demoró ".$profile->end()." seg.";
ob_end_flush();