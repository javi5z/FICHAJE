<?php

require 'conexion.php';
session_start();
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$_SESSION['usuario'] = $usuario;

$usuario_existe = "SELECT * FROM Usuarios WHERE usuario = '$usuario' and contrasena = '$pass'";

$query = mysqli_query($conectar,$usuario_existe);

$existe = mysqli_num_rows($query);
echo "<script>alert('$existe')</script>";

if($existe == 1){
    echo "<script>window.location='menu.php'</script>";
}else{
    echo "<script> alert('datos incorrectos');window.location='index.php'</script>";
}

?>
