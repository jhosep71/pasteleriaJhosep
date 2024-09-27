<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pasteleria</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo BASE_URL . 'assets/img/favicon.ico'; ?>">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href=" <?php echo BASE_URL . 'assets/lib/owlcarousel/assets/owl.carousel.min.css"'; ?> ">
    <link rel="stylesheet" href=" <?php echo BASE_URL . 'assets/lib/lightbox/css/lightbox.min.css'; ?>" >

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href=" <?php echo BASE_URL . 'assets/css/style.css'; ?>">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="<?php echo BASE_URL . 'principal/newsletter' ?>">Newsletter</a>
                        <span class="text-white">|</span>

                        <a class="text-white pl-3" href="<?php echo BASE_URL . 'principal/contacto' ?>">Contacto</a>
                        <span class="text-white">|</span>

                        <a class="text-white pl-3" href="<?php echo BASE_URL . 'principal/login' ?>">Login</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="https://www.facebook.com/profile.php?id=61550838142352" target="_black">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="" target ="_black">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="" target ="_black">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="https://www.instagram.com/jhosepcolchado/" target ="_black">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="https://www.youtube.com/@soydalto" target ="_black">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="<?php echo BASE_URL;?>" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">MAGIA</span>DULCE</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a class="nav-item nav-link active" href="<?php echo BASE_URL;?>">Inicio</a>
                        <a class="nav-item nav-link" href="<?php echo BASE_URL . 'principal/nosotros' ?>">Nosotros</a>
                        <a class="nav-item nav-link" href="<?php echo BASE_URL . 'principal/producto' ?>">Tienda</a>
                    </div>
                    <a href="<?php echo BASE_URL;?>" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">MAGIA</span>DULCE</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a  class="nav-item nav-link" href="<?php echo BASE_URL . 'principal/servicio' ?>">Servicios</a>
                        <a class="nav-item nav-link" href="<?php echo BASE_URL . 'principal/galeria' ?>">Galeria</a>
                        <a class="nav-item nav-link" href="<?php echo BASE_URL . 'principal/contacto' ?>">Contacto</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src=" <?php echo BASE_URL . 'assets/img/fondo1.png';?> "alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tradicional & Delicioso</h4>
                            <h1 class="display-3 text-white mb-md-4">"El postre perfecto para cada ocasión."</h1>
                            <a href="<?php echo BASE_URL . 'principal/nosotros' ?>" class="btn btn-primary py-md-3 px-md-5 mt-2">
                                aprende más</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100"src=" <?php echo BASE_URL . 'assets/img/fondo2.jpg';?> " alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tradicional & Delicioso</h4>
                            <h1 class="display-3 text-white mb-md-4">"El postre perfecto para cada ocasión."</h1>
                            <a href="<?php echo BASE_URL .'principal/nosotros'?>" class="btn btn-primary py-md-3 px-md-5 mt-2">Aprende más</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Tradicional & Delicioso</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Sobre nosotros</h4>
                    <h5 class="text-muted mb-3">"Estamos comprometidos a brindarte la mejor experiencia posible."</h5>
                    <p>"En Magia dulce, nos sentimos honrados de ser parte de las celebraciones, alegrías y momentos
                        especiales de nuestros clientes. A lo largo de los años, hemos tenido el privilegio de formar
                        parte de innumerables historias, desde cumpleaños y bodas hasta simples reuniones familiares.
                        Cada vez que un cliente cruza nuestras puertas, se convierte en parte de nuestra familia
                        extendida."</p>
                    <a href="<?php echo BASE_URL .'principal/correo'?>" class="btn btn-secondary mt-2">Ver mas</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src=" <?php echo BASE_URL . 'assets/img/pastel5.jpg';?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Nuestras características</h4>
                    <p>En Magia dulce, creemos que los postres son más que simples dulces; son experiencias que deleitan
                        el paladar y crean momentos memorables.

                        Por eso, nos enfocamos en utilizar ingredientes frescos y de la más alta calidad, siguiendo
                        recetas tradicionales con un toque moderno para crear postres únicos e irresistibles.</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Lo que nos Hace
                        Especiales</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>El Arte de la Pastelería
                    </h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>La Pasión por la Dulzura
                    </h5>
                    <a href="<?php echo BASE_URL .'principal/producto'?>" class="btn btn-primary mt-2">Ver mas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Promotion Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 " src=" <?php echo BASE_URL . 'assets/img/sinfonia.jpg';?>" style="object-fit: cover;">

                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                        style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0">$199</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">Sinfonía de Chocolate y Caramelo</h3>
                    <p class="text-white mb-4">Un pastel de capas con capas de bizcocho de chocolate, mousse de
                        chocolate y caramelo salado. </p>
                    <a href="<?php echo BASE_URL .'principal/producto'?>"class="btn btn-secondary py-3 px-5 mt-2">Ordenar ahora</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Los mejores servicios que brindamos a nuestros
                        clientes</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src=" <?php echo BASE_URL . 'assets/img/service-1.jpg';?>"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Nube de Frambuesa</h5>
                                <p>Un pastel ligero y aireado con un relleno de crema de frambuesa y una cubierta de
                                    merengue italiano.</p>
                                <a href="<?php echo BASE_URL .'principal/galeria'?>"
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Ver
                                    mas</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src=" <?php echo BASE_URL . 'assets/img/service-2.jpg';?>"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Explosión de Fruta:</h5>
                                <p>Un pastel fresco y colorido con capas de bizcocho de vainilla, crema de queso y
                                    frutas frescas de temporada. </p>
                                <a href="<?php echo BASE_URL .'principal/galeria'?>"
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Ver
                                    mas</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src=" <?php echo BASE_URL . 'assets/img/service-3.jpg';?>"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Cheesecake de Oreo</h5>
                                <p>n cheesecake decadente con una base de galletas Oreo y una cobertura de crema de
                                    Oreo.</p>
                                <a href="<?php echo BASE_URL .'principal/galeria'?>"
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Ver
                                    mas</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src=" <?php echo BASE_URL . 'assets/img/service-4.jpg';?>"
                                    style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5"
                                style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Tres Leches</h5>
                                <p>Un pastel húmedo y esponjoso empapado en tres tipos de leche.</p>
                                <a href="producto.php"
                                    class="border-bottom border-secondary text-decoration-none text-secondary">Ver
                                    mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row justify-content-center m-0">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center mb-5">Un viaje al paraíso de los postres: Explora
                    una variedad de sabores y texturas.</h1>
            </div>
        </div>
        <div class="row m-0 portfolio-container">
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid " src=" <?php echo BASE_URL . 'assets/img/porta-1.jpg';?>" alt="">
                    <a class="portfolio-btn" href=" <?php echo BASE_URL .'assets/img/porta-1.jpg';?>" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid " src=" <?php echo BASE_URL . 'assets/img/porta-2.jpg';?>" alt="">
                    <a class="portfolio-btn" href="<?php echo BASE_URL .'assets/img/porta-2.jpg';?>" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid " src=" <?php echo BASE_URL . 'assets/img/porta-3.jpg';?>" alt="">
                    <a class="portfolio-btn" href="<?php echo BASE_URL .'assets/img/porta-3.jpg';?>" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid " src=" <?php echo BASE_URL . 'assets/img/chocoporta.jpg';?>" alt="">
                    <a class="portfolio-btn" href="<?php echo BASE_URL . 'assets/img/chocoporta.jpg';?>" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid " src=" <?php echo BASE_URL . 'assets/img/fresaportafolio.jpg';?>" alt="">
                    <a class="portfolio-btn" href="<?php echo BASE_URL . 'assets/img/fresaportafolio.jpg';?>" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid " src=" <?php echo BASE_URL . 'assets/img/portafolio-6.jpg';?>" alt="">
                    <a class="portfolio-btn" href="<?php echo BASE_URL . 'assets/img/portafolio-6.jpg';?>" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5"> Delicias dulces sin remordimientos: Descubre
                        nuestros pasteles y pastelería a precios increíbles.</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel product-carousel">
                        <div
                            class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$80</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src=" <?php echo BASE_URL . 'assets/img/chocolate.jpg';?>"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Pastel de chocolate decadente: </h5>
                            <a href="<?php echo BASE_URL .'principal/producto'?>" class="btn btn-sm btn-secondary">Ordenar ahora</a>
                        </div>
                        <div
                            class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$99</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src=" <?php echo BASE_URL . 'assets/img/fresa.jpg';?>"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Cheesecake de fresa especial</h5>
                            <a href="<?php echo BASE_URL .'principal/producto'?>" class="btn btn-sm btn-secondary">Ordenar ahora</a>
                        </div>
                        <div
                            class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$90</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src=" <?php echo BASE_URL . 'assets/img/limon.jpg';?>"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Tarta de limón crujiente</h5>
                            <a href="<?php echo BASE_URL .'principal/producto'?>" class="btn btn-sm btn-secondary">Ordenar ahora</a>
                        </div>
                        <div
                            class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$120</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src=" <?php echo BASE_URL . 'assets/img/tartarojo.jpg';?>"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Pastel de terciopelo rojo</h5>
                            <a href="<?php echo BASE_URL .'principal/producto'?>" class="btn btn-sm btn-secondary">Ordenar ahora</a>
                        </div>
                        <div
                            class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">$115</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                                style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src=" <?php echo BASE_URL . 'assets/img/tartamiel.jpg';?>"
                                    style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Pastel de lavanda y miel</h5>
                            <a href="<?php echo BASE_URL .'principal/producto'?>" class="btn btn-sm btn-secondary">Ordenar ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Embajadores de la Dulzura y la Felicidad:</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel">
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src=" <?php echo BASE_URL . 'assets/img/team-1.jpg';?>" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Pierre Hermé </h3>
                                <h6 class="text-uppercase text-muted mb-4">Jefe Ejecutivo de Pastelería</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://twitter.com" target="_blank"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2"
                                        href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2"
                                        href="https://www.linkedin.com/company" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src=" <?php echo BASE_URL . 'assets/img/team-2.jpg';?>" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Maria Selyanina</h3>
                                <h6 class="text-uppercase text-muted mb-4">Chef de Pastelería</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://twitter.com" target="_blank"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2"
                                        href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2"
                                        href="https://www.linkedin.com/company" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src=" <?php echo BASE_URL . 'assets/img/team-3.jpg';?>" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Jordi Roca</h3>
                                <h6 class="text-uppercase text-muted mb-4">Artista de Pastelería</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://twitter.com" target="_blank"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2"
                                        href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2"
                                        href="https://www.linkedin.com/company" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src=" <?php echo BASE_URL . 'assets/img/team-4.jpg';?>" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5"
                                style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5">Olivier Bajard</h3>
                                <h6 class="text-uppercase text-muted mb-4"> Decorador</h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="https://twitter.com" target="_blank"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2"
                                        href="https://www.facebook.com" target="_blank" ><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2"
                                        href="https://www.linkedin.com/company" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">El Sabor de la Opinión: Tus Comentarios
                        Nos Inspiran</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">"¡Los pasteles estaban absolutamente deliciosos! Se
                                notaba que estaban hechos con ingredientes frescos y de alta calidad."</h4>
                            <img class="img-fluid mx-auto mb-3"src=" <?php echo BASE_URL . 'assets/img/testimonial-1.jpg';?>">
                            <h5 class="font-weight-bold m-0">Carlos Brench</h5>
                            <span>Ingeniero</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">"¡La presentación de los postres fue impresionante! ¡Eran
                                como obras de arte!"
                                "Nuestro mesero conocía muy bien el menú y pudo hacer excelentes recomendaciones."</h4>
                            <img class="img-fluid mx-auto mb-3" src=" <?php echo BASE_URL . 'assets/img/testimonial-2.jpg';?>" alt="">
                            <h5 class="font-weight-bold m-0">Cesar Castillo</h5>
                            <span>Medico</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">"El servicio fue impecable. Nos sentimos bienvenidos y
                                valorados desde el momento en que entramos."</h4>
                            <img class="img-fluid mx-auto mb-3" src=" <?php echo BASE_URL .'assets/img/testimonial-3.jpg';?>" alt="">
                            <h5 class="font-weight-bold m-0">Leonel Scaloni</h5>
                            <span>Arquitecto</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <?php include_once 'Views/template-principal/footer.php'; ?>
    <!-- Footer End -->

</body>

</html>