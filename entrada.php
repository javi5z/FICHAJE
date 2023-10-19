<?php
session_start();
if ($_SESSION['usuario'] == null || $_SESSION['usuario'] == ''){
  echo "<script>window.location='index.php'</script>";
};
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
    <form action="guardar_entrada.php" method="post">
    <a href="menu.php"> <img src="logo.jpg"></a>
    <br>
    <br>
        <label>Hora de entrada:</label>
        <br>
        <br>
        <?php
          date_default_timezone_set("Europe/Madrid");
          $fecha=date("d/m/y H:i");
          $hora=date("H:i");
        ?>
        <div name="fechaEntrada" id="contenedor">
          <input name="fechaEntrada" type="text" class="entrada" readonly value="<?php echo $fecha ?>"/>
        </div>
        <br>
        <label>Obra</label>
        <br>
        <input type="text" value="" name="obra" class="obra">
        <br>
        <br>
        <br>
      <input type="submit" value="FICHAR" class="btn">
      <br>
    </form>
</body>

</html>