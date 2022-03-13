<?php
global $resultado;
global $precio;
global $marcas;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <hr>
      <form class="tel" method="POST" action="">
      <section>
        <?php

            foreach ($resultado as $resul) {
              //id, modelo, marca, memoria, precio, fecha_adquisicion
                $id = $resul->id;
                $modelo = $resul->modelo;
                $marca = $resul->marca;
                $memoria = $resul->memoria;
                $precio = $resul->precio;
                $fecha_adquisicion = $resul->fecha_adquisicion;

                echo "<p>".$nombre.$modelo.$marca.$memoria.$precio.$fecha_adquisicion."</p>";
            }
            ?>
        </section>
      </form>
    <hr>
    <p>El precio del telefono es <?php $precio ?>
    <hr>
    <form class="marca" method="POST" action="">
      <section>
        <?php
            foreach ($marcas as $mar) {
                $m = $mar->marca;
                echo "<p>".$marca."</p>";
            }
            ?>
        </section>
      </form>

</body>
</html>