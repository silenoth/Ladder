<?php

class lsSystem {
    var $con;
    var $datos = array();
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
    
    //leer carpetas de los templates
    function getFoldersFromTemplate(){
        $directorio = _TEMPLATEFOLDER._DS;
        $dires=array();
        $midir=opendir($directorio);
        $i=0;
        while($archivo=readdir($midir)){
            if (is_dir($directorio.$archivo) && $archivo!="." && $archivo!="..")
                $dires[$i++]=$archivo;
        }
        closedir($midir);
        return $dires; 
    }
    
    //obtener carpeta del template
    public function templateFolder(){
        self::setNames();
        $sql = "SELECT a.ajuste_template AS template FROM ajustes AS a";
        $res = $this->con->query($sql);
        $res->execute();
        
        while($row = $res->fetch()){
            $array[] = $row;
        }
        
        return $array[0]['template'];
        self::closeCon();
    }
    
    //cargar template
    public function loadTemplate($template,$header,$footer,$datos){
        require_once 'lib/Twig/Autoloader.php';
        Twig_Autoloader::register();
        $loader = new Twig_Loader_Filesystem('template');
        $twig = new Twig_Environment($loader, array(
            'cache' => 'cache',
            'debug' => 'true'
        ));
                
        $tmpl = $twig->loadTemplate($template._EXT);
        
        $array = array();
        for($i=0;$i<sizeof($datos);$i++){
            $array[] = $datos[$i];
        }
        $ls = $array[0];
        echo $tmpl->render(array('ls' => $ls, 'header' => $header._EXT, 'footer' => $footer._EXT));
    }
    
    //cerrar conexion
    public function closeCon(){
        return $this->con = null;
    }
    
    //setnames
    function setNames(){
        return $this->con->query("SET NAMES 'utf8'");
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
            if(file_exists(_LANGFOLDER._DS.$array[0]['lang']._DS.'index.php')){
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