<?php
    $conexion = mysqli_connect('localhost','root','');
    if($conexion -> connect_error){
        die("Conexión falló ". $conexion -> connect_error);
    
    }

    $sql = "CREATE DATABASE ProyectoAyudantia";//Creacion de base de datos
    if($conexion -> query($sql) === true){
        echo "Base de datos creada exitosamente";
    }
    else{
        die("Error en la creacion ". $conexion -> connect_error);
    }
?>  