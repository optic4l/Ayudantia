<?php 
    include 'conexionBDProyecto.php';
    if(isset($_GET['id'])){
        $cod_art = $_GET['id'];
        $sql = "DELETE from Bodega where codigo_articulo = $cod_art";
        $resultado = mysqli_query($conexion, $sql);

        if($resultado){
            ?>
            <?php include('header.php'); ?>
            <h3>Articulo eliminado</h3>
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

?>