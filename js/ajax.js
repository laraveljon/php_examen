
$.ajax({
	type:"POST",
	url:"llenar_materia.php",
	success	: function(response){
		$('.id_materias_').html(response).fadeIn();
	}
});
$.ajax({
	type:"POST",
	url:"llenar_usuarios.php",
	success	: function(response){
		$('.id_usuarios_').html(response).fadeIn();
	}
});


function Registrar(){

   var id_materias = $('#id_materias').val();

   var id_usuarios = $('#id_usuarios').val();
   var calificacion = $('#calificacion').val();
   var fecha       = $('#fecha').val();

  var dataGlobal = "&id_materias="+id_materias+"&id_usuarios="+id_usuarios+"&calificacion="+calificacion+"&fecha="+fecha;
//  alert(dataGlobal);
  $.ajax({
    type:"POST",
    url:"registro_calificaciones.php",
    dataType:'json',
    data:dataGlobal,
    success: function(data){

       alert(data);
       location.reload();


    }

});
}

function Mostrar(){

  $.ajax({
    type:"POST",
    url:"mostrar_datos.php",
    success	: function(response){
      $('#respuesta').html(response).fadeIn();
    }
  });

}

function Eliminar(id_t_calificaciones){
var id_t_calificaciones = "&id_t_calificaciones="+id_t_calificaciones;
//alert(id_t_calificaciones);

$.ajax({
	type:"POST",
	url:"eliminar_calificaciones.php",
	dataType:'json',
	data:id_t_calificaciones,
	success: function(data){

		 alert(data);
		 location.reload();


	}

});

}

function Mostrar_dat(id_t_calificaciones){

	var id_t_calificaciones = "&id_t_calificaciones="+id_t_calificaciones;
	//alert(id_t_calificaciones);

	$.ajax({
		type:"POST",
		url:"llenar_id_edit.php",
		data:id_t_calificaciones,
		success	: function(response){

			$('#id_').val(response).fadeIn();

		}
		});

	$.ajax({
		type:"POST",
		url:"llenar_materia_edit.php",
		data:id_t_calificaciones,
		success	: function(response){

			$('.id_materiasEDI_').html(response).fadeIn();

		}
		});

		$.ajax({
			type:"POST",
			url:"llenar_usuario_edit.php",
			data:id_t_calificaciones,
			success	: function(response){

				$('.id_usuarioEDIs_').html(response).fadeIn();

			}
			});


			$.ajax({
				type:"POST",
				url:"llenar_calif_edit.php",
				data:id_t_calificaciones,
				success	: function(response,data){

					$('#calificacionEDI').val(response).fadeIn();

				}
				});

				$.ajax({
					type:"POST",
					url:"llenar_fecha_edit.php",
					data:id_t_calificaciones,
					success	: function(response,data){

						$('#fechaEDI').val(response).fadeIn();

					}
					});
}


function Mod(){

  var id_ = $("#id_").val();
  var id_materiasEDI = $("#id_materiasEDI").val();
  var id_usuarios_EDI = $("#id_usuarios_EDI").val();
  var calificacionEDI = $("#calificacionEDI").val();
  var fechaEDI = $("#fechaEDI").val();


	var dataGral = "id_="+id_+"&id_materiasEDI="+id_materiasEDI+"&id_usuarios_EDI="+id_usuarios_EDI+"&calificacionEDI="+calificacionEDI+"&fechaEDI="+fechaEDI;
    alert(dataGral);
	$.ajax({
		type:"POST",
		url:"edit.php",
		data:dataGral,
		success	: function(data){

			alert(data);
      	 location.reload();
		}
		});

}
