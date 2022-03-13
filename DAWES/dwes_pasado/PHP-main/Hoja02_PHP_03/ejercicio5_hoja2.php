<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>

    <?php

    $fecha = new DateTime();
    $fecha->modify("+ 48 hours");
    echo $fecha->format('d-m-y');

    ?>

</body>

</html>