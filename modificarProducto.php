<?php 
    include 'conexionBDProyecto.php';
    if(isset($_GET['id'])){
        $codArticulo = $_GET['id'];
        $sql = "SELECT * FROM Bodega WHERE codigo_articulo = $codArticulo ";
        $resultado = mysqli_query($conexion, $sql);
        if(!$resultado){
            die("Error consulta");
        }
        if(mysqli_num_rows($resultado)){
            $fila = mysqli_fetch_array($resultado);
            $nombreProd = $fila['nombre_articulo'];
            $cantArt = $fila['cantidad_articulos'];
            $nombreProv = $fila['nombre_proveedor'];
            $precioCompra = $fila['precio_articulo'];
            $precioVenta = $fila['venta_articulo'];
            $dcto = $fila['descuento_articulo']; 
        }
    }

    if(isset($_POST['Actualizar'])){
        $codArticulo = ($_GET['id']);
        $nombreProd = ($_POST['nombre_articulo']);
        $cantArt = ($_POST['cantidad_articulos']);
        $nombreProv = ($_POST['nombre_proveedor']);
        $precioCompra = ($_POST['precio_articulo']);
        $precioVenta = ($_POST['venta_articulo']);
        $dcto = ($_POST['descuento_articulo']);
        
        
        $sql = "UPDATE Bodega SET nombre_articulo = '$nombreProd', cantidad_articulos = '$cantArt', nombre_proveedor = '$nombreProv', precio_articulo = '$precioCompra', venta_articulo = '$precioVenta', descuento_articulo = '$dcto' WHERE codigo_articulo = $codArticulo ";


        $resultado = mysqli_query($conexion, $sql);
        if(!$resultado){
            die("error al modificar");
        }
        header("Location: formularioBodega.php");
    }
?>

<?php 
    include('header.php');
?>

<div>

    <div>
        <div >
            <div>
                <form action="modificarProducto.php?id=<?php echo $_GET['id']?>" method="POST">
                    
                    <section class="form-register">
                        <h3>Actualizar articulo</h3>
                        <label>Nombre del articulo</label><br>
                        <input class="controles" type="text" name="nombre_articulo" id="codigo_articulo" placeholder="Ingrese Nombre del articulo" value="<?php echo $nombreProd?>"><br>                        
                        <label>Cantidad de Articulos</label><br>
                        <input class="controles" type="number" name="cantidad_articulos" id="cantidad_articulos" placeholder="Ingrese cantidad de articulos" value="<?php echo $cantArt?>"><br>
                        <label>Nombre proveedor</label><br>
                        <input class="controles" type="text" name="nombre_proveedor" id="nombre_proveedor" placeholder="Ingrese nombre proveedor " value="<?php echo $nombreProv?>"><br>
                        <label>Precio Articulo</label><br>
                        <input class="controles" type="number" name="precio_articulo" id="precio_articulo"  placeholder="Ingrese precio del articulo" value="<?php echo $precioCompra?>"><br>
                        <label>Precio venta</label><br>
                        <input class="controles" type="number" name="venta_articulo" id="venta_articulo" placeholder="Ingrese precio de venta del articulo" value="<?php echo $precioVenta?>"><br>
                        <label>Descuento</label><br>
                        <input class="controles" type="number" name="descuento_articulo" id="descuento_articulo" placeholder="Ingrese descuento" value="<?php echo $dcto?>"><br>
                        
                        <input type="submit" class="botons" name="Actualizar" placeholder="Actualizar">
                    </section >
                    
                </form> 
            </div>    
        </div>
    </div>
</div>

<?php include('footer.php'); ?>