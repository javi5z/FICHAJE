<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="micss.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GENERAR EXCEL</title>
</head>

<body>
    <form action="generar_excel.php" method="post">
    <a href="menu.php"> <img src="logo.jpg"></a>
    <br>
    <br>
        <label>Fecha de Inicio</label>
        <br>
        <br>
        <div name="Fechas" id="contenedor">
          <input name="fechaInicio" type="date" class="entrada" required >
        </div>
        <br>
        <label>Fecha de Fin</label>
        <br>
          <input name="fechaFin" type="date" class="entrada" required >
        <br>
        <br>
        <br>
      <input type="submit" value="GENERAR EXCEL" class="btn">
      <br>
    </form>
</body>

</html>