<?php
    require('funcionesBaseDatos.php'); //llama a la pagina
               
            ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Examen ejercicio 1</title>
        <meta charset="UTF-8">
        <link href="estilo_hoja4_bbdd02.css" rel="stylesheet" type="text/css">
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
        foreach(mostrarLibros() as $libro){
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
    <a href="libros_datos.php">Volver</a>
    </body>
</html>