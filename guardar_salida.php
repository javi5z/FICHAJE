<?php

require 'conexion.php';
session_start();

if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == ''){
    echo "<script>window.location='index.php'</script>";
};

$usuario = $_SESSION['usuario'];
$h_salida = $_POST['fechaSalida'];
$obra = $_POST['obra'];

date_default_timezone_set("Europe/Madrid");
$fecha=date("d/m/y");

$query = "SELECT * FROM Salidas WHERE usuario = '$usuario' and hora_salida > '$fecha'";

$query = mysqli_query($conectar,$query);

$nr = mysqli_num_rows($query);

if($nr == 0){

    $insertar = "INSERT INTO Salidas VALUES('$usuario','$h_salida','$obra')";

    $query = mysqli_query($conectar,$insertar);

    if($query){
        echo "<script> alert('fichaje completado');window.location='menu.php'</script>";
    }
}else{
    echo "<script> alert('ya has fichado hoy');window.location='menu.php'</script>";
    }
?>