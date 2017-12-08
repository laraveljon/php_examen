<?php

  include_once "conexion/conexion.php";

  $sql =   " SELECT * FROM t_calificaciones";
   $resul_tip_equip = mysql_query($sql);

      while(($row_llenar_combo = mysql_fetch_array($resul_tip_equip)) != NULL){

          echo  '<center><table><tr>

                     <td>'.$row_llenar_combo['id_t_materias'].'</td>
                     <td>'.$row_llenar_combo['id_t_usuarios'].'</td>
                     <td>'.$row_llenar_combo['calificacion'].'</td>
                     <td>'.$row_llenar_combo['fecha_registro'].'</td>
                     <td><a href="index.php?action=editar&id= '.$row_llenar_combo['id_t_calificaciones'].' "><button>Editar</button></a></td>

                     <td><input type="button" value="Borrar" onclick="Eliminar("'.$row_llenar_combo['id_t_calificaciones'].'");"></td>

                 </tr></table><center>';
      }






 ?>
