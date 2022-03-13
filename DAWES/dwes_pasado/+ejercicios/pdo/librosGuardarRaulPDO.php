<?php
require('funcionesRaulPDO.php');


?>
<!DOCTYPE html>
<html>

<head>
  <title>Raul</title>
  <meta charset="UTF-8">
  <style>
    table {
      width: 100%;
      border: 1px solid #000;
      border-collapse: collapse;
    }

    th {
      letter-spacing: 2px;
      border: 1px solid #000;
      padding-top: 4px;
      padding-bottom: 4px;
    }

    td {
      letter-spacing: 1px;
      border: 1px solid #000;
    }

    tbody td {
      text-align: center;
    }
  </style>

</head>

<body>
  <table>
    <tr>
      <th>NUMERO DE EJEMPLAR</th>
      <th>TITULO</th>
      <th>ANO DE EDICION</th>
      <th>PRECIO</th>
      <th>FECHA DE ADQUISICION</th>
    </tr>
    <?php
    foreach (mostrarLibros() as $libro) {
      echo "<tr>";
      echo "<td>" . $libro['ejemplar'] . "</td>";
      echo "<td>" . $libro['titulo'] . "</td>";
      echo "<td>" . $libro['ano_edicion'] . "</td>";
      echo "<td>" . $libro['precio'] . "€</td>";
      echo "<td>" . $libro['fecha_adquisicion'] . "</td>";
      echo "</tr>";
    };
    ?>

  </table>
  <a href="librosDatosRaulPDO.php">Volver</a>
</body>

</html>