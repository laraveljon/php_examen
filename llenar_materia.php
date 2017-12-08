<?php
include_once "conexion/conexion.php";

$sql =   " SELECT id_t_materias FROM t_materias";
 $resul_tip_equip = mysql_query($sql);
echo  "<option>Selecione id materia</option>";
    while(($row_llenar_combo = mysql_fetch_array($resul_tip_equip)) != NULL){

        echo "<option  value = '".$row_llenar_combo['id_t_materias']."' >".$row_llenar_combo['id_t_materias']."</option>";
    }


 ?>
