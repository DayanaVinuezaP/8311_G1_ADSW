<?php require_once "php/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Catalogo-A mi madera</title>
    <link href="css/estilos1.css" rel="stylesheet" />
    <link href="css/estilos.css" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <img src="img/logo.png" width="100" height="50">
                <div id="navbarNav">
                    <img src="https://img.icons8.com/windows/32/null/user-male-circle.png"/>
                    <img src="https://img.icons8.com/material-sharp/24/null/add-shopping-cart.png"/>    
                </div>
            </div>
        </nav>
    </div>

    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Catálogo</h1>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100">
                                
                                <img class="card-img-top" src="img/<?php echo $data['imagen']; ?>" alt="..." />
                           
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        
                                        <h5 class="fw-bolder"><?php echo $data['nombre'] ?></h5>
                                        <p><?php echo $data['descripcion']; ?></p>

                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <span class="text-muted text-decoration-line-through"><?php echo $data['precio_normal'] ?></span>
                                        <?php echo $data['precio_rebajado'] ?>
                                    </div>
                                </div>
                              
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="" href="">Agregar</a>
                                    <a class="btn btn-outline-dark mt-auto agregar" data-id="" href="">Personalizar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>
    <footer class="py-5 bg-dark">
        <div class="container">
            <center>
                <a href="https://www.facebook.com/amimaderauio"><img src="img/facebook.png" width="30" height="30"/></a>
                <a href="https://www.instagram.com/amimadera.uio/"><img src="img/Instagram.png" width="25" height="25"/></a>
                <a href="https://www.tiktok.com/@amimadera.uio?lang=es"><img src="img/tiktok.png" width="30" height="30"/></a>
            
            </center>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>