    <?php
include './conexion/configServer.php';
include './conexion/consulSQL.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Personalizar</title>
    <?php include './inc/link.php'; ?>
</head>
<body id="container-page-product">
    <?php include './inc/navbar.php'; ?>
    <section id="infoproduct">
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>Catalogo Virtual <small class="tittles-pages-logo">A MI MADERA</small></h1>
                </div>
                <?php 
                    $CodigoProducto=$_GET['CodigoProd'];
                    $productoinfo=  ejecutarSQL::consultar("select * from producto where CodigoProd='".$CodigoProducto."'");
                    while($fila=mysqli_fetch_array($productoinfo)){
                        if($fila['CodigoCat']=='C1'){
                        echo '
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="text-center">Personalizar Producto</h3>
                                <br><br>
                                <h4><strong>Nombre: </strong>'.$fila['NombreProd'].'</h4><br>
                                <h4><strong>Precio: </strong>$'.$fila['Precio'].'</h4><br>
                                <div class="form-group">
                                    <h4><strong>Colores Disponibles</h4>
                                     <select class="form-control" style = "width: 250px;">
                                        <option value="opcion1">Azul</option>
                                        <option value="opcion2">Morado</option>
                                        <option value="opcion3">Cafe</option>
                                        <option value="opcion1">Amarillo</option>
                                        <option value="opcion2">Rosado</option>
                                        <option value="opcion3">Rojo</option>
                                     </select>
                                 </div>

                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <br><br><br>
                                <img class="img-responsive" src="imagenes/img-products/'.$fila['Imagen'].'">
                            </div>
                            <br><br><br>
                            <div class="col-xs-12 text-center">
                            <br>
                            <br>
                                <a href="producto.php" class="btn btn-lg btn-primary"><i class="fa fa-mail-reply"></i>&nbsp;&nbsp;Regresar a la tienda</a> &nbsp;&nbsp;&nbsp; 
                                <button value="'.$fila['CodigoProd'].'" class="btn btn-lg btn-success botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp; Añadir al carrito</button>
                            </div>
                        ';
                        }
                        else{
                            echo '
                            <div class="col-xs-12 col-sm-6">
                                <h3 class="text-center">Información Servicio</h3>
                                <br><br>
                                <h4><strong>Nombre: </strong>'.$fila['NombreProd'].'</h4><br>
                                <h4><strong>Precio: </strong>El precio sera notificado por el administrador</h4><br>
                                <h4><strong>Descripción: </strong>'.$fila['Descripcion'].'</h4><br>

                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <br><br><br>
                                <img class="img-responsive" src="imagenes/img-products/'.$fila['Imagen'].'">
                            </div>
                            <br><br><br>
                            <div class="col-xs-12 text-center">
                            <br>
                            <br>
                                <a href="producto.php" class="btn btn-lg btn-primary"><i class="fa fa-mail-reply"></i>&nbsp;&nbsp;Regresar a la tienda</a> &nbsp;&nbsp;&nbsp; 
                                <button value="'.$fila['CodigoProd'].'" class="btn btn-lg btn-success botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp; Añadir al carrito</button>
                            </div>
                        ';

                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>