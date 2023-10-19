<?php

$entrada = $_POST['entrada'];
$salida = $_POST['salida'];

if($entrada){
    echo "<script>window.location='entrada.php'</script>";

}elseif($salida){
    echo "<script>window.location='salida.php'</script>";
}else{
    echo "<script>window.location='generar_excel.php'</script>";

}


