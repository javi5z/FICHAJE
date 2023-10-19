<?php

require 'conexion.php';
session_start();

if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == ''){
    echo "<script>window.location='index.php'</script>";



}else{$query=mysqli_query($conectar,"SELECT * FROM Entradas");
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=entradas.xls");

    echo '<table border=1>';
    echo '<tr>';
    echo '<th>usuario</th>';
    echo '<th>hora entrada</th>';
    echo '<th>obra</th>';
    echo '</tr>';

    while($row=mysqli_fetch_array($query)){
        echo '<tr>';
        echo '<td>'.$row['usuario'].'</td>';
        echo '<td>'.$row['hora_entrada'].'</td>';
        echo '<td>'.$row['obra'].'</td>';
        echo '</tr>';
    }
    echo '</table>';
};

?>
