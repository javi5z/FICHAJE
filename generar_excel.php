<?php

require 'conexion.php';
session_start();

if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == ''){
    echo "<script>window.location='index.php'</script>";



}else{
    $f_inicio = $_POST['fechaInicio'];
    $f_fin = $_POST['fechaFin'];
    $f_inicio = DateTime::createFromFormat('d/m/Y', $f_inicio);
    //$f_fin = DateTime::createFromFormat('d/m/Y', $f_fin);
    $query=mysqli_query($conectar,"SELECT * FROM Entradas A, Salidas B 
    WHERE A.usuario = B.usuario AND A.fecha_entrada >= '$f_inicio' AND B.fecha_salida <= '$f_fin'");

    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=entradas.xls");

    echo '<table border=1>';
    echo '<tr>';
    echo '<th>TRABAJADOR</th>';
    echo '<th>FECHA ENTRADA</th>';
    echo '<th>HORA ENTRADA</th>';
    echo '<th>OBRA ENTRADA</th>';
    echo '<th>FECHA SALIDA</th>';
    echo '<th>HORA SALIDA</th>';
    echo '<th>OBRA SALIDA</th>';
    echo '</tr>';

    while($row=mysqli_fetch_array($query)){
        echo '<tr>';
        echo '<td>'.$row['usuario'].'</td>';
        echo '<td>'.$row['fecha_entrada'].'</td>';
        echo '<td>'.$row['hora_entrada'].'</td>';
        echo '<td>'.$row['obra_entrada'].'</td>';
        echo '<td>'.$row['fecha_salida'].'</td>';
        echo '<td>'.$row['hora_salida'].'</td>';
        echo '<td>'.$row['obra_salida'].'</td>';
        echo '</tr>';
    }
    echo '</table>';
};


?>
