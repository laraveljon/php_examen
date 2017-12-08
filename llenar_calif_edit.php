<?php
include_once "conexion/conexion.php";
$id_t_calificaciones = $_POST['id_t_calificaciones'];
$sql =   " SELECT calificacion FROM t_calificaciones where id_t_calificaciones ='".$id_t_calificaciones."' ";
//echo $sql;
 $resul_tip_equip = mysql_query($sql);
//echo  "<option>Selecione id materia</option>";
    while(($row_llenar_combo = mysql_fetch_array($resul_tip_equip)) != NULL){

           $dat = $row_llenar_combo['calificacion'];
        echo $dat;
    }


 ?>
