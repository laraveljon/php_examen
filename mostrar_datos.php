<?php

  include_once "conexion/conexion.php";

  $sql =   " SELECT * FROM t_calificaciones";
   $resul_tip_equip = mysql_query($sql);

      while(($row_llenar_combo = mysql_fetch_array($resul_tip_equip)) != NULL){
?>
          <center><table><tr>
          <td style="display:none;">
                    <?= $id_ = $row_llenar_combo['id_t_calificaciones']?>


                  </td>
                     <td><?=$row_llenar_combo['id_t_materias'];?></td>
                     <td><?=$row_llenar_combo['id_t_usuarios']?></td>
                     <td><?=$row_llenar_combo['calificacion']?></td>
                     <td><?=$row_llenar_combo['fecha_registro']?></td>
                     <td>
                       <button>Editar</button></td>

                     <td><input type="button" value="Borrar" onclick="Eliminar(<?=$id_ ?>);"></td>

                 </tr></table><center>;
<?php
      }






 ?>
