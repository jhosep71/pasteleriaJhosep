<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
class Principal extends Controller
{
 public function __construct() {
 parent::__construct();
 session_start();
 }
 public function index()
 {

 }

 public function nosotros()
{
$data['title'] = 'Nosotros';
$this->views->getView('principal', "nosotros", $data);
}
public function contacto()
 {
 $data['title'] = 'Contacto';
 $this->views->getView('principal', "contacto", $data);
 }
 public function servicio()
 {
 $data['title'] = 'Servicio';
 $this->views->getView('principal', "servicio", $data);
 }

 public function galeria()
 {
 $data['title'] = 'Galeria';
 $this->views->getView('principal', "galeria", $data);
 }

 public function login()
 {
 $data['title'] = 'Login';
 $this->views->getView('principal', "login", $data);
 }
 public function producto()
 {
 $data['title'] = 'Producto';
 $this->views->getView('principal', "producto", $data);
 }
 public function newsletter()
 {
 $data['title'] = 'newsletter';
 $this->views->getView('principal', "newsletter", $data);
 }
 
 public function procesar() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Cambia esto por tu servidor SMTP
            $mail->SMTPAuth = true;
            $mail->Username = 'colchadochuqui71@gmail.com'; // Cambia esto por tu usuario SMTP
            $mail->Password = '616629'; // Cambia esto por tu contraseña SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Destinatario
            $mail->setFrom($correo, $nombre);
            $mail->addAddress('colchadochuqui71@gmail.com');

            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = 'Nuevo mensaje de contacto';
            $mail->Body    = "Nombre: $nombre<br>Correo: $correo<br>Teléfono: $telefono<br>Mensaje:<br>$mensaje";

            // Envío del correo
            $mail->send();
            echo '¡El mensaje ha sido enviado con éxito!';
        } catch (Exception $e) {
            echo "¡Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo! Error: {$mail->ErrorInfo}";
        }
    } else {
        show_404();
    }
}
public function loginproceso()
 {
 $data['title'] = 'loginproceso';
 $this->views->getView('principal', "loginproceso", $data);
 }
 
 
 
 
 
}
