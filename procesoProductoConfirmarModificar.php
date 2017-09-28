<?php
   
    // conectar al servidor de BD
    include "conexion.php";
    // capturar ID del formulario
    $id = $_POST["modificarID"];
    // crear sentencia SQL para buscar ID
    $sql = "SELECT productos.idP,productos.marca,productos.descripcion,productos.origen,productos.precio,categoria.nombre";
    $sql .= " FROM productos INNER JOIN categoria ON productos.categoria = categoria.idC WHERE idP= $id";

    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // confirmar existencia
    if (mysql_num_rows($result)==0) {
        header("Location: errorPage.php?MSG=ID de Producto INEXISTENTE");
    } else {
        // cargar datos del registro
        $regProductos = mysql_fetch_array($result);
    } // endif
    // convertir caracteres

 

    $ID      =      $regProductos["idP"];
    $marca      = utf8_encode($regProductos["marca"]);
    $descripcion   = utf8_encode($regProductos["descripcion"]);
    $origen  = utf8_encode($regProductos["origen"]); 
    $precio  =  $regProductos["precio"]; 
    $categoria  = utf8_encode($regProductos["nombre"]);

   
    
 




?>

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
	<!--links de bootstrap y estilo del sitio  -->
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
							<h1 class="list-group-item discret list-group-item-heading   text-center">Baja Productos</h1>
							 
		 					<div class="panel-body">
		 					<h2>Dar Producto de Baja</h2>
								
<hr>
			<form class="form-group " id="producForm" action="procesoProductoModificar.php" method="POST" >
			<label  for="modificarProductoID" >ID</label>
			<input
				 class="form-control  formInputProducto"
				 id="modificarProductoID" 
                 type="number" 
                 name="modificarID"
                 maxlength="5"
                 title="Máximo 5 dígitos"
                 readonly="true"
                 <?php echo "value='$ID'" ?>
                 >
            
                  

			<br>
            	<label  for="modificarProductoMarca" >Marca</label>
			<input
				 class="form-control  formInputProducto"
				 id="modificarProductoMarca" 
                 type="text" 
                 name="modificarMarca"
                 maxlength="50"
                 title="Marca del producto"
                 
                 <?php echo "value='$marca'" ?> 
                 >
                 

			<br>
                 	<label  for="modificarProductoDescripcion" >Descripcion</label>
			<input
				 class="form-control  formInputProducto"
				 id="modificarProductoDescripcion" 
                 type="text" 
                 name="modificarDescripcion"
                 maxlength="50"
                 title="Descripcion del producto"
                
                 <?php echo "value='$descripcion'" ?> 
                 >
         <br>        

		<label  for="modificarProductoOrigen" >Origen</label>
			<input
				 class="form-control  formInputProducto"
				 id="modificarProductoOrigen" 
                 type="text" 
                 name="modificarOrigen"
                 maxlength="50"
                 title="Origen del producto"
                 readonly="true"
                 <?php echo "value='$origen'" ?> 
                 >
                 

			<br>
                 

			<br>
                          	<label  for="modificarProductoPrecio" >Precio</label>
			<input
				 class="form-control  formInputProducto"
				 id="modificarProductoPrecio" 
                 type="number" 
                 name="modificarPrecio"
                 maxlength="50"
                 title="Precio del producto"
                 
                 <?php echo "value='$precio'" ?> 
                 >
                 

			<br>
                                 	<label  for="modificarProductoCategoria" >Categoria</label>
			<input
				 class="form-control  formInputProducto"
				 id="modificarProductoCategoria" 
                 type="text" 
                 name="modificarCategoria"
                 maxlength="50"
                 title="Categoria del producto"
                 readonly="true"
                 <?php echo "value='$categoria'" ?> 
                 >
                 

			<br>

             
			
			
            <input type="submit"  class="form-control" value="Modificar" id="modificarProductoConfirmBoton">
            <input type="button"  class="form-control" value="Cancelar" onclick="SetPage('modificarProductos.php');"/> 
			
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









<!--Scripts de bootstrap  y jquery  -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>