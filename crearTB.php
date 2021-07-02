<?php
    include 'conexionBDProyecto.php';
    $sql = "CREATE TABLE Bodega (
        codigo_articulo INT(2) PRIMARY KEY,
        nombre_articulo VARCHAR(100),
        cantidad_articulos INT(5),
        nombre_proveedor VARCHAR(100),
        precio_articulo  INT(10),
        venta_articulo   INT(11),
        descuento_articulo INT(5)
    )";
    if($conexion -> query($sql) === true){
      echo "Tablas creadas correctamente.";
    }
    else{
        die("Error al crear tablas".$conexion ->error);
    }
?>