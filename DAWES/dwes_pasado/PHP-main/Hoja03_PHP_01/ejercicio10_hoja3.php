<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    
<?php 

$numero=55;
$primo=true;
for ($i=2; $i <=$numero/2; $i++) { 
    if ($numero%$i==0) {
        $primo=false;
    }
}
echo $primo ? "$numero Es primo : $numero No es primo";

?>

</body>
</html>