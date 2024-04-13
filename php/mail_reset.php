<?php
// Destinatario
$para  = $email;

// Título
$título = 'Restablecer contraseña empresa';

// Generar código aleatorio
$codigo = rand(1000, 9999);

// Definir email y token
$email = $para; // Reemplaza con el email del usuario

// Mensaje HTML
$mensaje = '
<html>
<head>
    <title>Restablecer</title>
</head>
<body>
    <h1>Universidad Tecnologica de Manzanillo</h1>
    <div style="text-align:center; background-color:#ccc">
        <p>Restablecer contraseña</p>
        <h3>' . $codigo . '</h3>
        <p> <a href="http://localhost/recuperacion/reset.php?email='.$email.'&token='.$token.'"> 
        Para restablecer, haz clic aquí </a> </p>
        <p> <small>Si usted no envió este código, favor de omitirlo</small> </p>
    </div>
</body>
</html>
';

// Cabeceras para correo HTML
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: gamerdelol01@gmail.com' . "\r\n";

// Enviar correo
$enviado = false;
if (mail($para, $título, $mensaje, $cabeceras)) {
    $enviado = true;
}
?>
