<?php


/*
// Conectando, seleccionando la base de datos
$link = mysql_connect('127.0.0.1', 'root', '')
 or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('mysql_usuarios') or die('No se pudo seleccionar la base de datos');
*/

$conexion = mysql_connect('localhost','root','') or die("No se pudo conectar la conexion");

mysql_select_db('escuela',$conexion) or die('no se encuentra la bd');





 ?>
