<?php
    include  "conexion.php";

    

    // capturar datos del formulario
    $id       =    $_POST["modificarID"];
    $marca   =  utf8_decode($_POST["modificarMarca"]);
    $descripcion   =  utf8_decode($_POST["modificarDescripcion"]);
    $origen   =  utf8_decode($_POST["modificarOrigen"]);
    $precio   =  $_POST["modificarPrecio"];


    // crear sentencia SQL
     // crear sentencia SQL para modificación
    $sql  = "UPDATE productos  SET ";
    $sql .= " marca = '$marca' ,";
    $sql .= " descripcion = '$descripcion' ,";
    $sql .= " precio = $precio ";
    $sql .= "WHERE idP = $id ";
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver automáticamente al formulario de Modificar
    header("Location: modificarProductos.php");  
   
   
    ?>