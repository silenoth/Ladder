<?php
class lsStream extends lsSystem {
    function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }
        $this->values=array();
    }
    
    function showStreamChannel(){
        
    }
}