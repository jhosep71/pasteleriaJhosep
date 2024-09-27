

<?php include_once 'Views/template-principal/header.php'; ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Galería</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Inicio</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Galería</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Portfolio Start -->
    <div class="container-fluid py-5 px-0">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h1 class="section-title position-relative text-center mb-5">Delicioso Postre Elaborado Con Los
                        Mejores Ingredientes Para Que Lo Disfruten En Familia</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active" data-filter="*">Todo</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Clasico</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Chocolate</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Postre</li>
                    </ul>
                </div>
            </div>
            <div class="row m-0 portfolio-container">
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo BASE_URL . 'assets/img/portfolio-2.jpg'; ?>" alt="">
                        <a class="portfolio-btn" href="<?php echo BASE_URL . 'assets/img/portfolio-2.jpg'; ?>" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                    <img class="img-fluid " src=" <?php echo BASE_URL . 'assets/img/porta-2.jpg';?>" alt="">
                    <a class="portfolio-btn" href="<?php echo BASE_URL .'assets/img/porta-2.jpg';?>" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item third">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo BASE_URL . 'assets/img/portfolio-3.jpg'; ?>" alt="">
                        <a class="portfolio-btn" href="<?php echo BASE_URL . 'assets/img/portfolio-3.jpg'; ?>" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo BASE_URL . 'assets/img/fresaportafolio.jpg'; ?>" alt="">
                        <a class="portfolio-btn" href="<?php echo BASE_URL . 'assets/img/fresaportafolio.jpg'; ?>" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item second">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo BASE_URL . 'assets/img/portfolio-5.jpg'; ?>" alt="">
                        <a class="portfolio-btn" href="<?php echo BASE_URL . 'assets/img/portfolio-5.jpg'; ?>" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 p-0 portfolio-item first">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo BASE_URL . 'assets/img/portafolio-6.jpg'; ?>" alt="">
                        <a class="portfolio-btn" href="<?php echo BASE_URL . 'assets/img/portafolio-6.jpg'; ?>" data-lightbox="portfolio">
                            <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Footer Start -->
    <?php include_once 'Views/template-principal/footer.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    
</body>

</html>