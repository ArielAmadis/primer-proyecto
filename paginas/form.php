<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$acepto = $_POST['acepto'];

$formcontent="
    Nombre: $nombre \n
    Correo electrónico: $correo \n
    Acepta términos y condiciones?: $acepto
";

$recipient = "perfumesfiufiu@gmail.com";

$subject = "Consulta vía web de $nombre";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: gracias.html");

?>