<?php

class lsSystem {
    var $con;
    
    public function __construct(){
        if(file_exists("config.php")){
            require_once("config.php");
                try {
                    $this->con = new PDO ('mysql:host='.$db['host'].';dbname='.$db['name'], $db['user'], $db['pass']);
                    $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                }catch(PDOException $e){
                    echo "ERROR: " . $e->getMessage();
                }            
            } else {
            echo "El archivo de configuracion no existe.";
        }
    }
    
    //cerrar conexion
    public function closeCon(){
        return $this->con = null;
    }
    
    //setnames
    public function setNames(){
        return $this->con->query("SET NAMES utf8");
    }
    
    //obtener lenguaje
    public function getLang(){
        self::setNames();
        $sql = "SELECT a.ajuste_lang AS lang FROM ajustes AS a";
        $res = $this->con->query($sql);
        $res->execute();
        
        while($row = $res->fetch()){
            $array[] = $row;
        }
        
        $rowcount = $res->rowCount();
        
        if($rowcount > 0) {
            if(file_exists(_LANGFOLDER._DS.$array[0]['lang']._DS.'indx.php')){
                return _LANGFOLDER._DS.$array[0]['lang']._DS.'index.php';
                self::closeCon();
            } else {
                print(_ERRNOFILELANG);
                self::closeCon();                 
            }
            
        } else {
            print(_ERRNOLANGFOLDERDB);
            self::closeCon();
        }
        
    }
}