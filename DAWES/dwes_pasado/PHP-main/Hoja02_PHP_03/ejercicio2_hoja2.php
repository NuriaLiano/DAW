<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

<?php
    $fecha=date("d-m-y");
echo date("d-m-y", strtotime($fecha."+ 10 year"));
    ?>
</body>
</html>