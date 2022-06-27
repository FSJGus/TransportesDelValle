<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$phone = $_POST['phoneNumber'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " \n";
$mensaje = "Su email es " . $mail . " \n";
$mensaje = "Su número de contacto es " . $phone . " \n";
$mensaje = "Su mensaje es  " . $_POST[$mensaje] . " \n";

$email_to = "transportesdelvallechile@gmail.com";
$email_subject = "Desde el formulario de contacto";

mail($email_to, $email_subject, utf8_decode($mensaje, $header));

header("location: exito.html");
?>
