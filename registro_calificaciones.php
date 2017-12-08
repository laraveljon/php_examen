<?php

  include_once "conexion/conexion.php";

  $id_materias =    $_POST['id_materias'];
  $id_usuarios =    $_POST['id_usuarios'];
  $calificacion =    $_POST['calificacion'];
  $fecha =    $_POST['fecha'];

  $query = "INSERT INTO t_calificaciones(	id_t_materias, id_t_usuarios, 	calificacion,fecha_registro)
  VALUES('$id_materias','$id_usuarios','$calificacion','$fecha')";

$resp = mysql_query($query);

$respuesta = "";

if($resp)
{
	$respuesta = "success: ok, msg: calificacion registrada";



}else{
	$respuesta = "Ocurrio un error al momento de guardar";
}

echo json_encode($respuesta);

mysql_close($conexion);



 ?>
