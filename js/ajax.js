
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
		url:"llenar_materia_edit.php",
		data:id_t_calificaciones,
		success	: function(response){

			$('.id_materiasEDI_').html(response).fadeIn();

		}
		});



}
