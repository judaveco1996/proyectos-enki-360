<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Incluir la clase PHPMailer
require 'PHPmailer/Exception.php';
require 'PHPmailer/PHPMailer.php';
require 'PHPmailer/SMTP.php';

// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);

// Configuración del servidor SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'jdvcflow1996@gmail.com';
$mail->Password = 'sjlx lfkw lhwf blky ';
$mail->SMTPSecure = 'ssl'; // tls o ssl
$mail->Port = 465; // Puerto SMTP

// Configuración del correo
$mail->setFrom('tunjacuenta229@gmail.com', 'juan');
$mail->addAddress('tunjacuenta229@gmail.com', 'tunjatecuenta');
$mail->Subject = 'Asunto del Correo';
$mail->Body = 'Contenido del mensaje';

try {
    // Enviar el correo
    $mail->send();
    echo 'El mensaje se envió correctamente.';
} catch (Exception $e) {
    echo 'Error al enviar el mensaje: ', $mail->ErrorInfo;
}
?>