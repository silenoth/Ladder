<?php

function usuariosOnline($isLog) {
require_once("conexion.php");
global $tablas_conexion;
$time = 5 ;
$date = time() ;
$ip = $_SERVER['REMOTE_ADDR'];
$limite = $date-$time*60 ;
Conectarse();
mysql_query("delete from ".$tablas_conexion["online"]." where date < $limite") ;
$resp = mysql_query("select * from ".$tablas_conexion["online"]." where ip='$ip'") ;
if(mysql_num_rows($resp) != 0) {
mysql_query("update ".$tablas_conexion["online"]." set date='$date', isLogged=".($isLog?1:0)." where ip='$ip'");
} else {
mysql_query("insert into ".$tablas_conexion["online"]." (date,ip,isLogged ) values ('$date','$ip',".($isLog?1:0).")");
}
//Usuarios totales
$query = "SELECT * FROM ".$tablas_conexion["online"]."";
$resp = @mysql_query($query) or die(mysql_error());
$totales = mysql_num_rows($resp);
//Usuarios no registrados
$query = "SELECT * FROM ".$tablas_conexion["online"]." WHERE `isLogged` = 0";
$resp = @mysql_query($query) or die(mysql_error());
$noregistrados = mysql_num_rows($resp);
//Usuarios registrados
$query = "SELECT * FROM ".$tablas_conexion["online"]." WHERE `isLogged` = 1";
$resp = @mysql_query($query) or die(mysql_error());
$registrados = mysql_num_rows($resp);

echo 'Total en linea: '.$totales.''
.'Invitados: '.$noregistrados.''
.'Usuarios: '.$registrados.'';
}