<?php
    $conexion = mysqli_connect('localhost','root','','ProyectoAyudantia');
    if($conexion -> connect_error){
        die("Error al conectar con la base de datos".$conexion -> connect_error);
    }
?>