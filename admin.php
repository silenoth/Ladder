<?php
session_start();
ob_start();
require_once('class/system.class.php');
require_once('class/admin.class.php');
$admin = new lsAdmin();
if(!empty($_SESSION['usuario']) && $admin->getUserAccess($_SESSION['usuario'])){
    $admin->showAdmin();
    if(isset($_POST)){
        if(isset($_POST['addnews']) && $_POST['addnews'] == 1){
            if(!empty($_POST['titulo']) || !empty($_POST['preview']) || !empty($_POST['contenido'])){
                $datos = array(
                    'autor' => $_SESSION['usuario'],
                    'titulo' => $_POST['titulo'],
                    'imagen' => $_FILES['file'],
                    'preview' => $_POST['preview'],
                    'contenido' => $_POST['contenido'],
                    'categoria' => isset($_POST['categoria']) ? $_POST['categoria'] : 1,
                    'activa' => isset($_POST['activa']) ? $_POST['activa'] : 1
                );
                $admin->addNews($datos);
                header("Location: ".$admin->whereuFrom());
            } else {
                header("Location: ".$admin->whereuFrom());
            }
        }
    }
} else {
    header("Location: ".$admin->getUrl());
}

ob_end_flush();