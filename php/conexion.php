<?php
//CONECTO A LA BASE DE DATOS CARRITO
    $servidor = "localhost";
    $nombreBd = "carrito";
    $usuario = "root";
    $pass = "root";
    $conexion = new mysqli($servidor, $usuario, $pass, $nombreBd);
    if($conexion -> connect_error) {
        die("No se pudo conectar");
    }
?>