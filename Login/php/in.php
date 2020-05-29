<?php
require "../../funciones/conexion2.php";

$usuario=$_POST['nombre'];
$pasword=$_POST['pasword'];

$sql="SELECT `id`, `nombre`, `pasword` FROM `users` WHERE nombre=:nombre AND pasword=:pasword";

$buscarUser=$conn->prepare($sql);
$buscarUser->bindParam(":nombre",$usuario);
$buscarUser->bindParam(":pasword",$pasword);
$buscarUser->execute();
$buscarUser2=$buscarUser->fetch(PDO::FETCH_ASSOC);
if($buscarUser2!=null){
    session_start();
    $_SESSION['datosUser']=$buscarUser2;
    header("location:  ../../inicio.php"); //../../inicio.php ../../../../inicio.php
}

if ($usuario!=$buscarUser2['nombreUser']){
    $error="usuario incorrecto ";
echo '<script>alert("'.$error.'")</script>';
echo '<script>location.href = "../../inicio.php"</script>';
}


















?>