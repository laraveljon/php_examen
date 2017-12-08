<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title></title>
    <style>
    nav{
      position:relative;
      margin:auto;
      width:100%;
      height:auto;
      background:#084B8A;
    }

    nav ul{
      position:relative;
      margin:auto;
      width:50%;
      text-align: center;
    }

    nav ul li{
      display:inline-block;
      width:24%;
      line-height: 50px;
      list-style: none;
    }

    nav ul li a{
      color:white;
      text-decoration: none;
    }

    section{
      position: relative;
      margin: auto;
      width:400px;
    }

    section h1{
      position: relative;
      margin: auto;
      padding:10px;
      text-align: center;
    }

    section form{
      position:relative;
      margin:auto;
      width:400px;
    }

    section form input{
      display:inline-block;
      padding:10px;
      width:95%;
      margin:5px;
    }

    /*section form input#usuarioRegistro{


      text-transform: lowercase;

    }*/

    /*

     section form input[type="submit"]{
      position:relative;
      margin:20px auto;
      left:4.5%;

    }*/



    table thead tr th{
      padding:10px;
    }

    table tbody tr td{
      padding:10px;
    }
    table, th, td {
   border: 1px solid black;
}
    </style>
  </head>
  <body>
    <center><h1>Escuela</h1></center>
    <nav>

    <div class="container" style="margin-top: 60px;">
      <button class="btn btn-info" data-toggle="modal" data-target="#miventana">
      Registrar Calificacion
    </button>
    <input class="btn btn-info" value="Mostrar Calificacion" onclick="Mostrar();">


    <div class="modal fade" id="miventana" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-dialog">

 <div class="modal-content">
    <!-- HEADER -->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       <h4>Registrar Calificacion</h4>
    </div>
    <!-- BODY-->
    <div class="modal-body">
      <!--form  method="post" onsubmit="return validarRegistro()"-->
      <form  method="post">

       <!--label for="usuarioRegistro">Usuario</label-->
       <select style="width: 150px;text-align:center;" id="id_materias" name="id_materias" class = "id_materias_">

       </select>
       <select style="width: 150px;text-align:center;" id="id_usuarios" name="id_usuarios" class = "id_usuarios_">

       </select>
       <input type="text" id="calificacion" name="calificacion">
       <input type="date" id ="fecha" name="fecha" step="1" min="2017-01-01" max="2017-12-31" value="<?php echo date("Y-m-d");?>">


        <input type="button" value="Registrar" onclick="Registrar();">

      </form>

    </div>
    <!-- FOOTER -->
    <!--input type="button" name="" value="Enviar" onclick="Enviar();"-->
 </div>

</div>

</div>
</div>

</nav>
<br><br><br>
<center>
<div id="respuesta">




</div>
</center>

<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"> </script>
 <script src="js/ajax.js"></script>
  </body>
</html>
