<?php 
include 'funcionesBaseDatos.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>libros</title>
</head>

<body>
    <table>
        <tr>
            <th>NUMERO DE EJEMPLAR</th>
            <th>TITULO</th>
            <th>AÑO DE EDICION</th>
            <th>PRECIO</th>
            <th>FECHA DE ADQUISICION</th>
        </tr>
        <?php
        foreach(mostrarlibros() as $libro){
            echo "<tr>";
            echo "<td>" . $libro['id'] . "</td>";
            echo "<td>" . $libro['titulo'] . "</td>";
            echo "<td>" . $libro['ano_edicion'] . "</td>";
            echo "<td>" . $libro['precio'] . "€</td>";
            echo "<td>" . $libro['fecha_adquisicion'] . "</td>";
            echo "</tr>";
        };
        ?>

    </table>
    <a href="libros.php">Volver</a>
</body>

</html>