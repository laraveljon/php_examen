<?php

include_once "conexion/conexion.php";
$id_t_calificaciones = $_POST['id_t_calificaciones'];
$sql =   " DELETE  FROM t_calificaciones where id_t_calificaciones = '".$id_t_calificaciones."' ";
//echo json_encode($sql);
 $resul_tip_equip = mysql_query($sql);
 $respuesta = "";

 if($resul_tip_equip)
 {
 	$respuesta = "success : ok,msg :calificacion eliminada”";



 }else{
 	$respuesta = "Ocurrio un error al momento de guardar";
 }

 echo json_encode($respuesta);

 mysql_close($conexion);

 ?>
