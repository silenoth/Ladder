<?php
//datos de conexion
$db = array
(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'ladder'
);

/////////////////////////////////////////////
// se recomienda no modificar estos datos  //
/////////////////////////////////////////////
/*******************************************/
// carpeta de plantillas
define('_TEMPLATESFOLDER', 'templates');
//extencion de las plantillas
define('_EXT', '.twig');

define('_DS', '/');

//carpeta de lenguaje
define('_LANGFOLDER', 'lang');
//errores de lenguaje
define('_ERRNOLANGFOLDERDB', 'Error: Base de datos vacía');
define('_ERRNOFILELANG', 'Error: No existe el archivo index.php en la carpeta '._LANGFOLDER);