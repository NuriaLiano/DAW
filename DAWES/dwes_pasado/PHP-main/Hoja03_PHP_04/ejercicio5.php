<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="#" method="POST">
    <h1>Comprobacion par/impar</h1>
    <label for="numero">Introduzca un numero entero</label><br>
    <input type="number" name="numero" id="numero" />
    <input type="submit" name="enviar" id="enviar" value="enviar">
    <?php
    if (isset($_POST["numero"])) {
      $numero = $_POST["numero"];
      if ($numero % 2 == 0) {
        echo "El numero: " . $numero . " es par";
      } else {
        echo "El numero: " . $numero . " es impar";
      }
    }


    ?>
  </form>
</body>

</html>