

<?php include_once 'Views/template-principal/header.php'; ?>
    <!-- Navbar End -->
    <!-- Topbar End -->
    <link rel="stylesheet" href=" <?php echo BASE_URL . 'assets/css/login.css'; ?>">

    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Login</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Inicio</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Login</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Login Section Start -->
    <section class="section bg-login login-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Iniciar Sesión</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo BASE_URL . 'principal/loginproceso'; ?>">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" name="usuario" type="email" placeholder="name@example.com" required />
                                <label for="inputEmail">Correo Electrónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputPassword" name="contrasena" type="password" placeholder="Password" required />
                                <label for="inputPassword">Contraseña</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="#">¿Olvidaste tu contraseña?</a>
                                <button class="btn btn-primary" type="submit">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small">
                            <a href="#" id="showRegisterForm">¿Necesitas una cuenta? ¡Regístrate aquí!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Login Section End -->

    <!-- Register Section Start -->
    <section class="section bg-login register-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Registro</h3>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputRegisterEmail" type="email"
                                        placeholder="name@example.com" required />
                                    <label for="inputRegisterEmail">Correo Electrónico</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputRegisterPassword" type="password"
                                        placeholder="Password" required />
                                    <label for="inputRegisterPassword">Contraseña</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputConfirmPassword" type="password"
                                        placeholder="Confirmar Password" required />
                                    <label for="inputConfirmPassword">Confirmar Contraseña</label>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="btn btn-primary" href="#">Registrarse</a>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small">
                                <a href="#" id="showLoginForm">¿Ya tienes una cuenta? ¡Inicia sesión aquí!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Register Section End -->

    <!-- Footer Section -->
    <?php include_once 'Views/template-principal/footer.php'; ?>
    <!-- Footer Section End -->

    <!-- Script to toggle between login and register section -->
    <script>
    document.getElementById("showRegisterForm").addEventListener("click", function () {
        document.querySelector(".login-section").style.display = "none";
        document.querySelector(".register-section").style.display = "block";
    });

     document.getElementById("showLoginForm").addEventListener("click", function () {
        document.querySelector(".login-section").style.display = "block";
        document.querySelector(".register-section").style.display = "none";
    });

    // Escuchar el evento de envío del formulario de registro
    document.getElementById("registerForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Evitar que el formulario se envíe automáticamente

        // Aquí iría la lógica de validación de datos del formulario de registro
        // Si la validación es exitosa, mostrar alerta de registro correcto
        alert("Registro correcto");

        // Aquí podrías redirigir al usuario al formulario de inicio de sesión si lo deseas
        // Por ejemplo:
        // document.querySelector(".register-section").style.display = "none";
        // document.querySelector(".login-section").style.display = "block";
    });
</script>
</body>

</html>



