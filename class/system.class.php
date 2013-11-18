<?php

class lsSystem {
    var $con;
    
    public function __construct(){
        if(file_exists("config.php")){
            require_once("config.php");
                try {
                    $this->con = new PDO ('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);
                    $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                }catch(PDOException $e){
                    echo "ERROR: " . $e->getMessage();
                }            
            } else {
            echo "El archivo de configuracion no existe.";
        }
    }
    
    public function closeCon(){
        $this->con = null;
    }
    
    public function setNames(){
        return $this->con->query("SET NAMES 'utf8");
    }
    
    public function getLang(){
        $sql = "SELECT a.ajuste_lang FROM ajustes AS a";
        $res = $this->con->query($sql);
        $res->execute();
        
        while($row = $res->fetch()){
            $array[] = $row;
        }
        
        return $array[0];
        self::closeCon();
    }
}
?>