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
        }
        
        th {
          letter-spacing: 2px;
        }
        
        td {
          letter-spacing: 1px;
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
            getLibros();
        ?>

    </table>
    <a href="librosDatosRaulPDO.php">Volver</a>
    </body>
</html>
