<?php

$destinatario = 'millospuma08@gmail.com';
$nombre  = $_POST['name'];
$asunto  = $_POST['subject'];
$mensaje = $_POST['message'];
$email   = $_POST['email'];

$header = "Este mensaje es enviado desde el formulario de contacto" . "\n";
$mensajecompleto = $mensaje . "\nCorreo electrónico: " . $email . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajecompleto, $header);
echo "<script>alert('CORREO ENVIADO EXITOSAMENTE')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>