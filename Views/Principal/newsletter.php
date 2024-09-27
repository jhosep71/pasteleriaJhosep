

<?php include_once 'Views/template-principal/header.php'; ?>
    <!-- Navbar End -->
    <!-- Topbar End -->

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Servicio</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Inicio</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Servicio</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Content Section -->
    <section class="newsletter">
        <div class="container">
            <h2>¡Descubre las últimas noticias de pastelería!</h2>
            <p>Aquí encontrarás las últimas novedades, recetas y eventos de nuestra pastelería.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="newsletter-content">
                        <h3>Receta destacada: Tarta de Fresa</h3>
                        <p>¡Descubre cómo hacer nuestra deliciosa tarta de fresa con esta receta paso a paso!</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalInfo1">Ver receta</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="newsletter-content">
                        <h3>Tips de decoración</h3>
                        <p>Aprende nuevos trucos y técnicas para decorar tus pasteles como un profesional.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalInfo2">Leer más</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="newsletter-content">
                        <h3>Evento especial: Clase de repostería</h3>
                        <p>¡No te pierdas nuestra próxima clase de repostería donde aprenderás nuevas habilidades!</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalInfo3">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Section End -->

    <!-- Modals -->
    <!-- Modal 1 -->
    <div class="modal fade" id="modalInfo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Receta de Tarta de Fresa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
    <!-- Aquí puedes colocar cualquier información detallada sobre la receta de la tarta de fresa -->
    <p>¡Descubre cómo hacer nuestra deliciosa tarta de fresa con esta receta paso a paso!</p>
    <p>Ingredientes:</p>
    <ul>
        <li>Fresas frescas</li>
        <li>Harina de trigo</li>
        <li>Azúcar</li>
        <li>Huevos</li>
        <li>...</li>
    </ul>
    <p>Procedimiento:</p>
    <ol>
        <li>Lavar y cortar las fresas.</li>
        <li>...</li>
    </ol>
</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="modalInfo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tips de Decoración</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
    <!-- Aquí puedes colocar cualquier información detallada sobre los tips de decoración -->
    <p>Aprende nuevos trucos y técnicas para decorar tus pasteles como un profesional.</p>
    <p>Consejos:</p>
    <ul>
        <li>Utiliza una manga pastelera para crear diseños detallados.</li>
        <li>Experimenta con diferentes boquillas para lograr efectos variados.</li>
        <li>...</li>
    </ul>
</div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="modalInfo3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Evento Especial: Clase de Repostería</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
    <!-- Aquí puedes colocar cualquier información detallada sobre el evento de la clase de repostería -->
    <p>¡No te pierdas nuestra próxima clase de repostería donde aprenderás nuevas habilidades!</p>
    <p>Fecha: 28 de mayo de 2024</p>
    <p>Lugar: Pastelería Magia Dulce</p>
    <p>Hora: 10:00 am - 12:00 pm</p>
    <p>Costo: PEN 20.00 por persona</p>
    
</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <?php include_once 'Views/template-principal/footer.php'; ?>
    <!-- Fin de los Modals -->

    <!-- Scripts JavaScript -->
    <!-- Bootstrap y jQuery -->
     <!-- Footer Section -->
    
    <!-- Footer Section End -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>

