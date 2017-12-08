
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
alert("Estoes "+id_t_calificaciones);



}
