<?php
    include  "conexion.php";

    

    // capturar datos del formulario
    $id       =    $_POST["categoriaID"];
    $nombre   =  utf8_decode($_POST["categoriaNuevoNombre"]);


    // crear sentencia SQL
     // crear sentencia SQL para modificación
    $sql  = "UPDATE categoria  ";
    $sql .= "SET nombre = '$nombre' ";
    $sql .= "WHERE idC = $id ";
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver automáticamente al formulario de Modificar
    header("Location: modificarCategoria.php");  
   
   
    ?>