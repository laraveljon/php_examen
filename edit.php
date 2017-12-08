<?php
include_once "conexion/conexion.php";

$id_             =    $_POST['id_'];
$id_materiasEDI  =    $_POST['id_materiasEDI'];
$id_usuarios_EDI =    $_POST['id_usuarios_EDI'];
$calificacionEDI =    $_POST['calificacionEDI'];
$fechaEDI        =    $_POST['fechaEDI'];

$query = "UPDATE t_calificaciones
SET
id_t_materias='$id_materiasEDI',
id_t_usuarios='$id_usuarios_EDI',
calificacion='$calificacionEDI',
fecha_registro='$fechaEDI'
WHERE id_t_calificaciones =  '$id_' ";

$resp = mysql_query($query);

$respuesta = "";

if($resp)
{
$respuesta = "success: ok, msg:  calificacion actualizada";



}else{
$respuesta = "Ocurrio un error al momento de guardar";
}

echo json_encode($respuesta);

mysql_close($conexion);



 ?>
