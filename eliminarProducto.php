<?php 
    include 'conexionBDProyecto.php';
    if(isset($_GET['id'])){
        $cod_art = $_GET['id'];
        $sql = "DELETE from Bodega where codigo_articulo = $cod_art";
        $resultado = mysqli_query($conexion, $sql);

        if(!$resultado){
            die("Consulta fallida");
        }

        $_SESSION['message'] = 'Producto eliminado correctamente';  
        $_SESSION['message_type'] ='danger';
    }

?>