<?php

class lsHome extends lsSystem {
    
    public function __construct(){
        parent::__construct();
        if (file_exists(parent::getLang())){
            parent::getLang();
        }  
    }
    
    public function getNews($id){
        $sql = "";
    }
}