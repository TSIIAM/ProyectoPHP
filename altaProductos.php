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
							<h1 class="list-group-item  list-group-item-heading  discret text-center">Alta Productos</h1>
							 
		 					<div class="panel-body">
		 					<h2>Dar Producto de Alta</h2>
								<hr>
			<form class="form-group " id="producForm" action="procesoProductoAlta.php" method="POST">
			<label  for="altaProductoInputMarca" >Marca</label>
			<input type="text"  class="form-control  formInputProducto" id="altaProductoInputMarca" name="productoMarca">
			<br >
			<label  for="altaProductoInputDescripcion" >Descripcion</label>
			<input type="text"  class="form-control formInputProducto" id="altaProductoInputDescripcion" name="productoDescripcion">
			<br >
			<label  for="altaProductoInputOrigen" >Origen</label>
			<select class="form-control formInputProducto" id="altaProductoInputOrigen" name="productoOrigen">
				<option value="usa">Usa</option>
				<option value="alemania">Alemania</option>
				<option value="china">China</option>
			</select>
			<br >

			<label  for="altaProductoInputPrecio" >Precio</label>
			<input type="text"  class="form-control formInputProducto" id="altaProductoInputPrecio" name="productoPrecio">
			<br >
			<label  for="altaProductoInputCategoria" >Categoria</label>
			<select class="form-control formInputProducto" id="altaProductoInputCategoria" name="productoCategoria">
				 
				<?php
				 include "loadCategorias.php";
				 ?>
			</select>
			<br >
			
            <input type="submit"  class="form-control" value="Ingresar" id="altaProductoBoton">
            </form>

            <div class="text-center">
				<p class="panel panel-default error text-danger" id="altaProductoError"></p>
                <p class="panel panel-default resultado text-success"  id="altaProductoResultado"></p>
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