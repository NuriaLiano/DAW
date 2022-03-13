<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    
<?php

$euros=57;
$billetes10=floor($euros/10);
$euros=$euros%10;
$billetes5=floor($euros/5);
$euros=$euros%5;
$monedas1=$euros/1;

echo "Tienes: $billetes10 billetes de 10 <br>";
echo "Tienes: $billetes5 billetes de 5 <br>";
echo "Tienes: $monedas1 monedas de 1 <br>";



?>

</body>
</html>