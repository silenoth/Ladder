<?php

class lsBracket extends lsSystem {

    function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }
    }

    //api challonge
    private function getTournament(){
        include('lib/BinaryBeast.php');
        //creamos nueva instancia api binarybeast
        $bb = new BinaryBeast();
        $bb->enable_dev_mode();
        $bb->disable_ssl_verification();
        $tournament = $bb->tournament->list_my(null, 300, true);

        //var_dump($tournament);
        return $tournament;

    }

    function showTournaments(){
        $array = $this->getTournament();
        $datos = array(
            'torneo' => $array
        );
        $this->loadTemplate('tournaments', $datos);
    }

    private function getBrackets($id){
        include('lib/BinaryBeast.php');
        //nueva instancia
        $bb = new BinaryBeast();
        $bb->enable_dev_mode();
        $bracket = $bb->tournament($id);
        //var_dump($bracket);
        return $bracket;
    }

    function showBrackets(){
        $id = $_GET['id'];
        $datos = array(
            'bracket' => $this->getBrackets($id)
        );
        $this->loadTemplate('brackets', $datos);
    }
}