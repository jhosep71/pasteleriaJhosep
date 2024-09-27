<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MAGIA DULCE  </title>
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
                    <a class="text-white pr-3" href="<?php echo BASE_URL . 'principal/newsletter' ?>">NewsLetter</a>
                        <span class="text-white">|</span>

                        <a class="text-white pl-3" href="<?php echo BASE_URL . 'principal/contacto' ?>">Contacto </a>
                        <span class="text-white">|</span>

                        <a class="text-white pl-3" href="<?php echo BASE_URL . 'principal/login' ?>">Login</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
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
                </div>
            </nav>
        </div>
    </div>