<?php include('header.php'); ?>

      <form method="POST" action="RegistroBodega.php">
        <section class="form-register">
            <h3>Formulario Articulo</h3><br>
            <label>Codigo del articulo</label><br>
            <input class="controles" type="number" name="codigo_articulo" id="codigo_articulo" placeholder="Ingrese Codigo del articulo"><br><br>

            <label>Nombre del articulo</label><br>
            <input class="controles" type="text" name="nombre_articulo" id="nombre_articulo" placeholder="Ingrese Nombre del articulo"><br><br>
           
            <label>Cantidad de Articulos</label><br>
            <input class="controles" type="number" name="cantidad_articulos" id="cantidad_articulos" placeholder="Ingrese cantidad de articulos"><br><br>
           
            <label>Nombre del proveedor</label><br>
            <input class="controles" type="text" name="nombre_proveedor" id="nombre_proveedor" placeholder="Ingrese Nombre del proveedor"><br><br>
           
            <label >Precio del articulo</label><br>
            <input class="controles" type="number" name="precio_articulo" id="precio_articulo" placeholder="Ingrese precio del articulo"><br><br>
           
            <label>venta del articulo</label><br>
            <input class="controles" type="number" name="venta_articulo" id="venta_articulo" placeholder="Ingrese precio venta del articulo"><br><br>

            <label>descuento del articulo</label><br>
            <input class="controles" type="number" name="descuento_articulo" id="descuento_articulo" placeholder="Ingrese descuento del articulo"><br><br>
            
            <input class="botons" type="submit" name="Agregar" placeholder="Agregar">
            

        </section>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Nombre proveedor</th>
                        <th>Precio compra</th>
                        <th>Precio venta</th>
                        <th>Descuento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include 'ConexionBDProyecto.php';
                        $sql = "SELECT * from Bodega";
                        $resultado = mysqli_query($conexion, $sql);

                        while($fila = mysqli_fetch_array($resultado)){?>
                            <tr>
                                <td> <?php echo $fila['codigo_articulo'] ?></td>
                                <td> <?php echo $fila['nombre_articulo'] ?></td>
                                <td> <?php echo $fila['cantidad_articulos'] ?></td>
                                <td> <?php echo $fila['nombre_proveedor'] ?></td>
                                <td> <?php echo $fila['precio_articulo'] ?></td>
                                <td> <?php echo $fila['venta_articulo'] ?></td>
                                <td> <?php echo $fila['descuento_articulo'] ?></td>
                                <td> 
                                    <a class="btn btn-primary" href="modificarProducto.php?id=<?php echo $fila['codigo_articulo']?>">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a class="btn btn-danger" href="eliminarProducto.php?id=<?php echo $fila['codigo_articulo']?>">
                                        <i class="far fa-trash-alt"></i>
                                    </a>

                                </td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>

<?php include('footer.php'); ?>