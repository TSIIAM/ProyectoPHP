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
							<h1 class="list-group-item discret list-group-item-heading   text-center">Consultar Productos</h1>
							 
		 					<div class="panel-body">
		 					<h2>Consulte Producto</h2>
								
								<table class="table table-responsive table-striped table-bordered table-hover" id="lst">
       <?php
        // conectar al servidor de BD
        include "conexion.php";
        // determinar criterio de ordenación
        if (isset($_GET["ORD"])) {
            // capturar orden
            $orden = $_GET["ORD"];    
        } else {
            $orden = "idP";
        } // endif
        // capturar filtro
        $categor = $_GET["categoriaID"];
		echo("<script>console.log('PHP: ".$categor."');</script>");
		
        // determinar filtro        
        if ($categor == "0" || $categor == "undefined") {
            $filtro =''; 
        } else {
            $filtro = "WHERE idC ='$categor'";
        } // endif
        // crear sentencia SQL
        $sql  = "SELECT   productos.idP,productos.marca,productos.descripcion,productos.origen,productos.precio,categoria.nombre ";
        $sql .= "  FROM productos   ";
        $sql .= "  JOIN categoria   ";
        $sql .= "    ON productos.categoria = categoria.idC ";
		if (isset($filtro)) {
            // agregamos filtro 
            $sql .= " $filtro "; 
        }
		$sql .= "ORDER BY $orden";
        // depurar
        // die($sql);
        // ejecutar sentencia SQL
        $result = mysql_query($sql,$conex);
        // controlar existencia de datos
        if (mysql_num_rows($result)==0) {
            // mostrar error
            header("Location: errorPage.php?MSG=No exiten datos para mostrar");
        } // endif

        // crear cabecera de tabla de datos
        echo "
			<thead class='thead-inverse'>
               <tr>
                 <th>
                  <a href='listarProductos.php?categoriaID=$categor&ORD=idP'>ID</a>
                 </th>       
                 <th>
                  <a href='listarProductos.php?categoriaID=$categor&ORD=marca'>NOMBRE</a>
                 </th>
                 <th>
                  <a href='listarProductos.php?categoriaID=$categor&ORD=descripcion'>DESCRIPCION</a>
                 </th>
                 <th>
                  <a href='listarProductos.php?categoriaID=$categor&ORD=origen'>ORIGEN</a>
                 </th>
                 <th>
                  <a href='listarProductos.php?categoriaID=$categor&ORD=precio'>PRECIO</a>
                 </th>
                 <th>
                  <a href='listarProductos.php?categoriaID=$categor&ORD=categoria,idP'>CATEGORIA</a>
                 </th>                           
               </tr> 
			</thead>       
        ";
        // die($sql);        
        $fila = 1;  // contador de filas
        while ($reg=mysql_fetch_array($result)) {
            // convertir caracteres
            $marca      = utf8_encode($reg["marca"]);
            $descripcion   = utf8_encode($reg["descripcion"]);
			$origen   = utf8_encode($reg["origen"]);

            $categoria = utf8_encode($reg["nombre"]);     

            // determinar fila par/impar
            $resto = $fila % 2;
            if ($resto==0) {
                // crear fila de datos PAR
                echo "<tr class='filaPAR'>\n";                
            } else {
                // crear fila de datos IMPAR
                echo "<tr class='filaIMP'>\n";                
            } // endif
            echo " <td >$reg[idP]</td>\n"; // id            
            echo " <td>$marca</td>\n";                                 // marca
            echo " <td>$descripcion</td>\n";  
			echo " <td>$origen</td>\n";                                 // origen
            echo " <td>$ $reg[precio]</td>\n";					// precio
            echo " <td>$categoria</td>\n";                           // departamento
            echo "</tr>\n"; 
            // incrementar número de fila
            $fila++;                                               
        } // end while (siguiente registro)
        // cerrar conexión
        mysql_close($conex);
       ?>       
      </table>
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