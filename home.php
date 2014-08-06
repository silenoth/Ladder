<?php
session_start();
ob_start();
require_once("class/system.class.php");
require_once("class/home.class.php");
$home = new lsHome();
$home->start();
$home->whereuFrom();
$home->showHome();
if (!empty($_SESSION['errorlogin'])) {
    unset($_SESSION['errorlogin']);
}
if (!empty($_SESSION['usuario'])){
    if(isset($_GET['code'])){
        //twitch api
        $twitch = new twitch;
        //obtener token
        $getToken = $twitch->generateToken($_GET['code']);
        //verificar token
        $verify = $twitch->checkToken($getToken['token']);
        if($verify['token'] == false) {
            header("Location: ".$this->whereuFrom());
        } else {
            //obtener usuario
            $user = $twitch->getUserObject($verify['name']);
            //obtener id
            $userId = $twitch->getUserObject($user['name']);
            //obtener scopes
            $scopes = implode(";",explode(" ", $_GET['scope']));

            $values = array(
            'twitch_id' => $userId['_id'],
            'twitch_user' => $user['name'],
            'twitch_token' => $getToken['token'],
            'twitch_code' => $_GET['code'],
            'twitch_scopes' => $scopes
            );
            //print_r($values);
            $home->updateTwichChannel($values,$_SESSION['usuario']);
        }
    }
} else {
    echo "quieres loquear con twitch?";
}
echo $home->end();
ob_end_flush();