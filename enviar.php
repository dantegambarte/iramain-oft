<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];

$header = 'Form: ' . $mail . " \r\n";
$header = "X-Mailer: PHP/" . phpversion() . " \r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . $apellido .",\r\n";
$mensaje = "Su email es: " . $email . ",\r\n";
$mensaje = "Su telefono es: " . $nombre . ",\r\n";
$mensaje = "Fecha del posible turno: " . $fecha . ",\r\n";
$mensaje = "Enviado el: " . date('d/m/Y', time());

$para = 'gambartedante@gmail.com';
$asunto = 'Coordinacion para la asignacion del turno.'

mail($para, $asunto, utf8_decode($mensaje), $header);
header("Location: index.html");