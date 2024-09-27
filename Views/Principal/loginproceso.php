<?php
// Verificar si la sesión ya está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Incluir la clase de conexión con la ruta correcta
require_once __DIR__ . '/../../Config/App/conexion.php'; // Ajusta la ruta según tu estructura de directorios

// Crear una instancia de la clase de conexión
$conexionObj = new Conexion();
$conexion = $conexionObj->conect();

$mensaje = ''; // Variable para almacenar el mensaje de error

// Verificar si el formulario ha sido enviado y los campos están presentes
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
    // Obtener datos del formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Consulta SQL para verificar el usuario y la contraseña
    $sql = "SELECT * FROM usuariologin WHERE usuario=:usuario AND contraseña=:contrasena";
    $statement = $conexion->prepare($sql);
    $statement->bindParam(':usuario', $usuario);
    $statement->bindParam(':contrasena', $contrasena);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Verificar si se encontró un resultado
    if (count($result) == 1) {
        // Inicio de sesión exitoso
        $_SESSION["usuario"] = $usuario;
        // Redirigir a la URL base
        header("Location: " . BASE_URL); // Asegúrate de que BASE_URL está definida correctamente
        exit;
    } else {
        // Inicio de sesión fallido
        $mensaje = "Usuario o contraseña incorrectos";
    }
}

// Mostrar mensaje de error si es necesario
if (!empty($mensaje)) {
    echo "<div class='alert alert-danger text-center' role='alert'>$mensaje</div>";
}
?>
