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


                       <div class="container" style="margin-top: 60px;">

                       <input class="btn btn-info"  data-toggle="modal" data-target="#miventana2" value="Editar Calificacion" onclick="Mostrar_dat(<?=$id_?>);">


                       <div class="modal fade" id="miventana2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                   <div class="modal-dialog">

                    <div class="modal-content">
                       <!-- HEADER -->
                       <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4>Modificar Calificacion</h4>
                       </div>
                       <!-- BODY-->
                       <div class="modal-body">
                         <!--form  method="post" onsubmit="return validarRegistro()"-->
                         <form  method="post">

                          <!--label for="usuarioRegistro">Usuario</label-->
                          <select style="width: 150px;text-align:center;" id="id_materiasEDI" name="id_materiasEDI" class = "id_materiasEDI_">

                          </select>
                          <select style="width: 150px;text-align:center;" id="id_usuarios" name="id_usuarios" class = "id_usuarioEDIs_">

                          </select>
                          <input type="text" id="calificacionEDI" name="calificacionEDI">
                          <input type="date" id ="fechaEDI" name="fechaEDI" step="1" min="2017-01-01" max="2017-12-31" value="<?php echo date("Y-m-d");?>">


                           <input type="button" value="Registrar" onclick="Registrar();">

                         </form>

                       </div>
                       <!-- FOOTER -->
                       <!--input type="button" name="" value="Enviar" onclick="Enviar();"-->
                    </div>

                   </div>

                   </div>
                   </div>


                     <td><input type="button" value="Borrar" class="btn btn-info"  onclick="Eliminar(<?=$id_ ?>);"></td>

                 </tr></table><center>;
<?php
      }






 ?>
