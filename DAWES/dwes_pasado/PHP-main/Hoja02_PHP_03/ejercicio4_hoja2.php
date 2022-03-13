<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php

$fecha1=new DateTime("2001-02-11");
$fecha2=new DateTime("2020-09-22");
$diff=$fecha1->diff($fecha2);
echo $diff->days." dias";


    ?>
</body>
</html>