<?php
session_start();
ob_start();
require_once('class/system.class.php');
require_once('class/admin.class.php');
$admin = new lsAdmin();
if(!empty($_SESSION['usuario']) && $admin->getUserAccess($_SESSION['usuario'])){
    $admin->showAdmin();
    if (!empty($_SESSION['addnewsok'])){
        unset($_SESSION['addnewsok']);
    } elseif (!empty($_SESSION['addtourneyok'])){
        unset($_SESSION['addtourneyok']);
    } elseif (!empty($_SESSION['deletetourney'])){
        unset($_SESSION['deletetourney']);
    } elseif (!empty($_SESSION['editmailmsgok'])){
        unset($_SESSION['editmailmsgok']);
    }

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
        } elseif (isset($_POST['addtorneo']) && $_POST['addtorneo'] == 1){
            if(!empty($_POST['t_titulo']) || !empty($_POST['t_descripcion'])){
                $torneo = array(
                    't_autor' => $_SESSION['usuario'],
                    't_titulo' => $_POST['t_titulo'],
                    't_logo' => $_FILES['tfile'],
                    't_descripcion' => $_POST['t_descripcion'],
                    't_subida' => isset($_POST['t_subida']) ? $_POST['t_subida'] : 1,
                    't_bajada' => isset($_POST['t_bajada']) ? $_POST['t_bajada'] : 1,
                    't_equipos' => isset($_POST['t_equipos']) ? $_POST['t_equipos'] : 2,
                    't_activo' => isset($_POST['t_activo']) == 'on' ? 1 : 0
                );
                $admin->addTournaments($torneo);
                header("Location: ".$admin->whereuFrom());
            } else {
                header("Location: ".$admin->whereuFrom());
            }
        } elseif (isset($_POST['deletetourney']) && $_POST['deletetourney'] == 1){

        } elseif (isset($_POST['editmailok']) && $_POST['editmailok'] == 1) {
            $admin->editEmailMsg($_POST['editmail']);
        }

    }
} else {
    header("Location: ".$admin->getUrl());
}
ob_end_flush();