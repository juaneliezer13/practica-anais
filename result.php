<!DOCTYPE html>
<html>
<head>
  <title>Clasificación de Animales</title>
</head>
<body>
  <center>
    <h1>Clasificación de Animales</h1>
    <hr>
  </center>
  <h3>Resultados de la busqueda:</h3>
  <br><br>
  <?php if ($animal_data): ?>
    <CENTER>
      <h1>Familia a la cual pertecene el animal es: <strong><?php echo $animal_data['family']; ?></strong>  </h1>
      <a href="hola.php">Regresar</a>
    </CENTER>
  <?php else: ?>
    <CENTER>
      <h1>No se han encontrado resultados para su busqueda...</h1>
      <a href="hola.php">Regresar</a>
    </CENTER>
  <?php endif; ?>
</body>
</html
