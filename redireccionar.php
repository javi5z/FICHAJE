<?php

$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$fechas = $_POST['fechas'];

if($entrada){
    echo "<script>window.location='entrada.php'</script>";

}elseif($salida){
    echo "<script>window.location='salida.php'</script>";
}elseif($fechas){
    echo "<script>window.location='fechas_excel.php'</script>";
}else{
    echo "<script>window.location='generar_excel.php'</script>";

}


