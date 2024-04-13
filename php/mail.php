<?php
// Destinatario
$para  = $email;

// Título
$título = 'Gracias por registrarte';

// Generar código aleatorio
$codigo = rand(1000,9999);

// Mensaje HTML
$mensaje = '
<html>
<head>
   <meta charset="UTF8" />
   <title>Confirmación de registro</title>
</head>
<body>
   <p>Tu código de verificación es: <strong>' . $codigo . '</strong></p>
   <p><a href="http://localhost/recuperacion/confirm.php?email='.$email.'">
   Verificar cuenta</a></p>
</body>
</html>
';

// Cabeceras para correo HTML
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= 'From: gamerdelol@gmail.com' . "\r\n";

// Enviar correo
$enviado = mail($para, $título, $mensaje, $cabeceras);

// Verificar si se envió correctamente
if($enviado) {
   echo 'El correo se ha enviado correctamente.';
} else {
   echo 'Hubo un error al enviar el correo.';
}
?>
