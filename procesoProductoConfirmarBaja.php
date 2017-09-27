<?php
   
    // conectar al servidor de BD
    include "conexion.php";
    // capturar ID del formulario
    $id = $_POST["bajaID"];
    // crear sentencia SQL para buscar ID
    $sql = "SELECT productos.idP,productos.marca,productos.descripcion,productos.origen,productos.precio,categoria.nombre";
    $sql .= " FROM productos INNER JOIN categoria ON productos.categoria = categoria.idC WHERE idP= $id";

    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // confirmar existencia
    if (mysql_num_rows($result)==0) {
        header("Location: errorPage.php?MSG=ID de Persona INEXISTENTE");
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
			<form class="form-group " id="producForm" action="procesoProductoBaja.php" method="POST" >
			<label  for="bajaProductoID" >ID</label>
			<input
				 class="form-control  formInputProducto"
				 id="bajaProductoID" 
                 type="number" 
                 name="bajaID"
                 maxlength="5"
                 title="Máximo 5 dígitos"
                 readonly="true"
                 <?php echo "value='$ID'" ?>
                 >
                  

			<br>
            	<label  for="bajaProductoMarca" >Marca</label>
			<input
				 class="form-control  formInputProducto"
				 id="bajaProductoMarca" 
                 type="text" 
                 name="bajaMarca"
                 maxlength="50"
                 title="Marca del producto"
                 readonly="true"
                 <?php echo "value='$marca'" ?> 
                 >
                 

			<br>
                 	<label  for="bajaProductoDescripcion" >Descripcion</label>
			<input
				 class="form-control  formInputProducto"
				 id="bajaProductoDescripcion" 
                 type="text" 
                 name="bajaDescripcion"
                 maxlength="50"
                 title="Descripcion del producto"
                 readonly="true"
                 <?php echo "value='$descripcion'" ?> 
                 >
                 

			<br>
                      	<label  for="bajaProductoOrigen" >Origen</label>
			<input
				 class="form-control  formInputProducto"
				 id="bajaProductoOrigen" 
                 type="text" 
                 name="bajaOrigen"
                 maxlength="50"
                 title="Origen del producto"
                 readonly="true"
                 <?php echo "value='$origen'" ?> 
                 >
                 

			<br>
                          	<label  for="bajaProductoPrecio" >Precio</label>
			<input
				 class="form-control  formInputProducto"
				 id="bajaProductoPrecio" 
                 type="number" 
                 name="bajaPrecio"
                 maxlength="50"
                 title="Precio del producto"
                 readonly="true"
                 <?php echo "value='$precio'" ?> 
                 >
                 

			<br>
                                 	<label  for="bajaProductoCategoria" >Categoria</label>
			<input
				 class="form-control  formInputProducto"
				 id="bajaProductoCategoria" 
                 type="text" 
                 name="bajaCategoria"
                 maxlength="50"
                 title="Categoria del producto"
                 readonly="true"
                 <?php echo "value='$categoria'" ?> 
                 >
                 

			<br>

             
			
			
            <input type="submit"  class="form-control" value="Eliminar" id="bajaProductoBoton">
            <input type="button"  class="form-control" value="Cancelar" onclick="SetPage('bajaProductos.php');"/> 
			
            </form>

            <div class="text-center">
				<p class="panel panel-default error text-danger" id="bajaProductoError"></p>
                <p class="panel panel-default resultado text-success"  id="bajaProductoResultado"></p>
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