<!DOCTYPE html>
<html lang="es">
<head>
	<title>WebMarketCam </title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Keywords" content="webMarketCamp,importadora, distribuidora, articulos, fotografia, camaras, tripodes, flashes, filtros, accesores, fotografia en uruguay ">
	<meta name="Description" content="Empresa importadora y distribuidora de articulos para fotografos, desde camaras, tripodes, flashes, filtros y todo tipo de accesorios.">
	
	<meta name="Author" content="Alvaro Mesa alvaromesa19@gmail.com">
	<meta name="Copyright" content="Derechos reservados">
	<meta name="robots" content="index, follow">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php 
        include "header.html";
     ?>
<main class="container" id="contenido">
 
<section id="empty" class="row clearfix"></section>



	<section id="Bienvenida" class="row">
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		 				<div class="list-group">
						<div class="thumbnail">
							<h1 class="list-group-item   list-group-item-heading  discret  text-center">Modificar Productos</h1>
							 
		 					<div class="panel-body">
		 					<h2>Modificar Producto</h2>
								<hr>
			<form class="form-group " id="producForm" action="procesoProductoConfirmarModificar.php" method="POST" >
			<label  for="modificarProductoID" >ID</label>
			
			<input
				 class="form-control  formInputProducto"
				 id="modificarProductoID" 
                 type="number" 
                 name="modificarID"
                 maxlength="5"
                 title="Máximo 5 dígitos">

			<br >
			
			
            <input type="submit"  class="form-control" value="Buscar" id="modificarProductoBoton">
			
            </form>

            <div class="text-center">
				<p class="panel panel-default error text-danger" id="modificarProductoError"></p>
                <p class="panel panel-default resultado text-success"  id="modificarProductoResultado"></p>
            </div>
							</div>
						</div>
					</div>
				</article>
	</section><!-- Termina Jumbotron Introducción-->

 
 

			 







</main>	









<!--Sripts de bootstrap  y jquery  -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>