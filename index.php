
<?php
session_start();
$usuario = $_POST['usuario'];
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="micss.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
</head>

<body>
    <form action="comprobar_login.php" method="post">
      <img src="logo.jpg">
    <br>
    <br>
        <label>Usuario:</label>
        <br>
        <div name="Usuario" id="contenedor">
          <input name="usuario" type="text" value="" class="usuario"/>
        </div>
        <br>
        <label>Contraseña:</label>
        <br>
        <input type="password" value="" name="pass" class="pass">
        <br>
        <br>
        <br>
      <input type="submit" value="INICIAR SESIÓN" class="btn">
      <br>
    </form>
</body>

</html>