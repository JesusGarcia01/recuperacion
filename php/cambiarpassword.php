<?php 
    include "./conexion.php";
    $email =$_POST['email'];
    $p1 =$_POST['p1'];
    $p2 =$_POST['p2'];
    if($p1 == $p2){
        $p1=sha1($p1);
        $conexion->query("UPDATE usuarios SET password='$p1' WHERE email='$email' ")or die($conexion->error);
        echo 'todo bien <a href="../login.php">Iniciar sesion </a>';
    }else{
        echo "no coinciden";
    }
?>