<?php 
    include "./conexion.php"; //conexion a la base de datos
    $email =$_POST['email'];
    $bytes = random_bytes(5); //la cantidad de caracteres
    $token =bin2hex($bytes); //generador de token

    include "mail_reset.php";
    if($enviado){
        $conexion->query(" INSERT INTO passwords(email, token, codigo) Values ('$email','$token','$codigo') ") or die($conexion->error);
        echo '<p>Verifica tu email para restablecer tu cuenta</p>';
    }


?>