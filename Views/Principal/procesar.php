<?php

require 'principal.php';

 // Verificar si el método de solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crear una instancia de la clase Principal
    $principal = new Principal();

    // Llamar al método procesar
    $principal->procesar();
} else {
    // Si no es una solicitud POST, mostrar un error o redirigir a otra página
    echo "Error: Método no permitido.";
}
?>