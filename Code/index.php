<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <?php include './inc/link.php'; ?>
</head>
<body id="container-page-index">
    <?php include './inc/navbar.php'; ?>
    <div class="jumbotron" id="jumbotron-index">
      <h1><span class="tittles-pages-logo">A MI MADERA </span> <small style="color: #fff;"></small></h1>
      <p>
          Soluciones arquitectonicas
      </p>
    </div>
    <section id="new-prod-index">
         <div class="container">
            <div class="page-header">
                <h1>Ofertas <small>productos/servicios</small></h1>
            </div>
            <div class="row">
              <?php
                  include 'conexion/configServer.php';
                  include 'conexion/consulSQL.php';
                  $consulta= ejecutarSQL::consultar("select * from producto where Stock > 0 limit 6");
                  $totalproductos = mysqli_num_rows($consulta);
                  if($totalproductos>0){
                      while($fila=mysqli_fetch_array($consulta)){
                         echo '
                        <div class="col-xs-12 col-sm-6 col-md-4">
                             <div class="thumbnail">
                               <img src="imagenes/img-products/'.$fila['Imagen'].'">
                               <div class="caption">
                                 <h3>'.$fila['NombreProd'].'</h3>
                                 <p>'.$fila['Descripcion'].'</p>
                                 <p>$'.$fila['Precio'].'</p>
                                 <p class="text-center">
                                     <a href="infoProd.php?CodigoProd='.$fila['CodigoProd'].'" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp; Personalizar</a>&nbsp;&nbsp;
                                     <button value="'.$fila['CodigoProd'].'" class="btn btn-success btn-sm botonCarrito"><i class="fa fa-shopping-cart"></i>&nbsp; Añadir</button>
                                 </p>

                               </div>
                             </div>
                         </div>     
                         ';
                     }   
                  }else{
                      echo '<h2>No hay productos registrados en la tienda</h2>';
                  }  
              ?>  
            </div>
         </div>
    </section>
    <section id="reg-info-index">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center">
                   <article style="margin-top:20%;">
                        <p><i class="fa fa-users fa-4x"></i></p>
                        <h3>Registrate</h3>
                        <p>Registrese y hagase cliente de <span class="tittles-pages-logo">A MI MADERA</span> para recibir las mejores ofertas y descuentos especiales de nuestros productos.</p>
                        <p><a href="registrar.php" class="btn btn-info btn-block">Registrarse</a></p>   
                   </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.796989308486!2d-78.49530664989672!3d-0.18735583546613122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59b0fa3658765%3A0xccf9ad66d666a6f!2sA%20mi%20Madera!5e0!3m2!1ses!2sec!4v1676451192207!5m2!1ses!2sec" width="600" height="450" style="border: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <?php include './inc/footer.php'; ?>
</body>
</html>