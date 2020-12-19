<?php
$destinatario="sergioluisl2324@gmail.com";
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];

$header = "Enviado desde la pagina SerTech";

$mensaje_completo = $mensaje."\nAtentamente ".$nombre;

mail($destinatario, $asunto, $mensaje_completo, $header);
