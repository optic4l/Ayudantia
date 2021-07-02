<?php
    include 'conexionBDProyecto.php';
    if(isset($_POST['Agregar'])){
        if(strlen($_POST['codigo_articulo']) >= 1 &&
        strlen($_POST['nombre_articulo'])>= 1 &&
        strlen($_POST['cantidad_articulos'])>= 1 &&
        strlen($_POST['nombre_proveedor'])>= 1 &&
        strlen($_POST['precio_articulo'])>= 1 &&
        strlen($_POST['venta_articulo'])>= 1 &&
        strlen($_POST['descuento_articulo']) >= 1){
            $codigo_articulo = ($_POST['codigo_articulo']);
            $nombre_articulo = ($_POST['nombre_articulo']);
            $cantidad_articulos = ($_POST['cantidad_articulos']);
            $nombre_proveedor = ($_POST['nombre_proveedor']);
            $precio_articulo = ($_POST['precio_articulo']);
            $venta_articulo = ($_POST['venta_articulo']);
            $descuento_articulo = ($_POST['descuento_articulo']);
            $sql = "INSERT INTO bodega VALUES ('$codigo_articulo','$nombre_articulo','$cantidad_articulos','$nombre_proveedor','$precio_articulo','$venta_articulo','$descuento_articulo')";
            $resultado  = mysqli_query($conexion,$sql);
            if($resultado){
                ?>
                    <?php include('header.php'); ?>
                    <h3>Articulo registrado</h3>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="formularioBodega.php">Volver</a>
                        </li> 
                    </ul>
                <?php
            }
            else{
                ?>
                <h3>Ha ocurrido un error </h3>
                <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="formularioBodega.php">Volver</a>
                        </li> 
                </ul>
                <?php
            }
        }
    }
?>