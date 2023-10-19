<?php
require 'conexion.php';
session_start();

if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == ''){
  echo "<script>window.location='index.php'</script>";
};

if ($_SESSION['usuario'] == 'LAURA') {
  $oculto='inline';
}
  else{
  $oculto='none';
  }

?>

<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="micss.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrada</title>
</head>

<body>
<form action="redireccionar.php" method="post">    
    <img src="logo.jpg">
    <br>
    <br>
    <label>Elige una opción</label>
    <br>
    <br>
    <input type="submit" value="ENTRADA" class="btn" name="entrada">
    <br>
    <br>
    <input type="submit" value="SALIDA" class="btn" name="salida">
    <br>
    <br>
    <input type="submit" value="GENERAR EXCEL"style="display:<?php echo $oculto ?>" class="btn" name="excel">
</form>
</body>

</html>