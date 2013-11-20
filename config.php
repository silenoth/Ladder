<?php
//datos de conexion
$db = array
(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'ladder'
);

//carpeta de plantillas
define('_TEMPLATEFOLDER', 'templates');
//extencion de las plantillas
define('_EXT', '.tpl');

define('_DS', DIRECTORY_SEPARATOR);

//carpeta de lenguaje
define('_LANGFOLDER', 'lang');
//errores de lenguaje
define('_ERRNOLANGFOLDERDB', 'Error: Base de datos vacía');
define('_ERRNOFILELANG', 'Error: No existe el archivo index.php en la carpeta '._LANGFOLDER);
