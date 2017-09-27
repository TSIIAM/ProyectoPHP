<?php
    include  "conexion.php";

    
    



    // capturar datos del formulario
    $nombre   =  utf8_decode($_POST["categoriaNombre"]);
  
    // crear sentencia SQL
    $sql  = "INSERT INTO categoria ";
    $sql .= "(nombre) ";
    $sql .= "VALUES "; 
    $sql .= "('$nombre')";
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver automáticamente al formulario de Alta
    header("Location: altaCategoria.php");  
   
   
    ?>