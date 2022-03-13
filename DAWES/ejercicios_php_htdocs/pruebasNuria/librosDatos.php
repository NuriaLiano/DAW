<?php 
    require 'funcionesBaseDatos.php';

?>

<html>

	<head>
		<title>Nuria</title>
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
    foreach (verLibros() as $libro) {
      echo "<tr>";
      echo "<td>" . $libro['id'] . "</td>";
      echo "<td>" . $libro['titulo'] . "</td>";
      echo "<td>" . $libro['ano_edicion'] . "</td>";
      echo "<td>" . $libro['precio'] . "</td>";
      echo "<td>" . $libro['fecha_adquisicion'] . "</td>";
      echo "</tr>";
    };
    ?>

  </table>
		<a href="libros.php">Volver a libros</a>
	</body>
</html>