<?php
// Verifica si las constantes ya están definidas antes de definirlas
if (!defined('HOST')) {
    define('HOST', 'localhost');
}
if (!defined('DB')) {
    define('DB', 'colchadodb');
}
if (!defined('USER')) {
    define('USER', 'root');
}
if (!defined('PASS')) {
    define('PASS', '');
}
if (!defined('CHARSET')) {
    define('CHARSET', 'utf8mb4');
}

class Conexion {
    private $conect;

    public function __construct() {
        // Construir el DSN de PDO correctamente
        $pdo = "mysql:host=" . HOST . ";dbname=" . DB . ";charset=" . CHARSET;
        try {
            $this->conect = new PDO($pdo, USER, PASS);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Conexión exitosa'; // Mensaje de éxito para verificar la conexión
        } catch (PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage();
            exit; // Salir si hay un error en la conexión
        }
    }

    public function conect() {
        return $this->conect;
    }
}

// Crear una instancia de la clase para probar la conexión
$conexion = new Conexion();
?>
