<?php
    // PROCESO PRODUCTO DELETE
 
    // conectar al servidor de BD
    include "conexion.php";
    
    // capturar y convertir datos del formulario
    $id          = $_POST["bajaID"];
    // crear sentencia SQL para eliminación FISICA
    $sql  = "DELETE FROM productos WHERE idP= $id";
    // depurar sentencia
    // die($sql);
    // ejecutar sentencia SQL
    mysql_query($sql,$conex);                
    // cerrar conexión
    mysql_close($conex);
    // volver automáticamente al formulario de baja de Productos
    header("Location: bajaProductos.php");
?>