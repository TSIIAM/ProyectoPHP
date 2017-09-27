<?php    
    // conectar al servidor de BD
    $conex = mysql_connect("localhost","root","");
    // controlar conexión
    if (!$conex) {
        header("Location: errorPage.php?MSG=NO se pudo CONECTAR al SERVIDOR de Base de Datos");
    } // endif
    // seleccionar Base de Datos
    $selDB = mysql_select_db("webmarket",$conex);
    // controlar selección de Base de Datos
    if (!$selDB) {
        header("Location: errorPage.php?MSG=NO se pudo SELECCIONAR la Base de Datos");
    } // endif
?>