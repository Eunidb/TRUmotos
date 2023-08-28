<?php
if(empty($_POST['nombre']) || empty($_POST['asunto']) || empty($_POST['descripcion']) || !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
$correo = strip_tags(htmlspecialchars($_POST['correo']));
$m_asunto = strip_tags(htmlspecialchars($_POST['asunto']));
$descripcion = strip_tags(htmlspecialchars($_POST['descrpcion']));

$to = "diazbarrioseunice2003@gmail.com"; // El correo electronico //
$subject = "$m_asunto:  $nombre";
$body = "Haz recibido un mensaje de la pagina web.\n\n"."Aquí están los detalles:\n\nNombre: $nombre\n\n\nCorreo: $correo\n\nAsunto: $m_asunto\n\nDescrpcion: $descripcion";
$header = "De: $correo";
$header .= "Responder a: $correo";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
