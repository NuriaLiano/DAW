<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel='stylesheet' href='bootstrap-4.5.3-dist\css/bootstrap.min.css'>

</head>
<?php
require_once "querysMYSQLi.php";
require_once "querysPDO.php";
$cliente = clienteGasto();
$comercio = comercioVenta();
?>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12">
                <p class="display-4 text-center text-light bg-dark">Asociacion de comercios</p>
            </div>
            <div class="col-6">
                <?php
                echo "<img src='../imagenes/clientes/".$cliente['imagen']."' 'style='height:200px'>";
                ?>
            </div>
            <div class="col-6">
            <?php
                echo "<img src='../imagenes/comercios/".$comercio['imagen']."' 'style='height:200px'>";
                ?>
            </div>
            <div class="col-6">
                <?php
                echo "El cliente que mas ha gastado es " . $cliente["nombre"] . " " . $cliente["apellidos"] . " " . $cliente["importe"] . "€";
                ?>
            </div>
            <div class="col-6">
                <?php
                echo "El comercio que mas ha vendido es " . $comercio["nombre"] . ", ha realizado  " . $comercio["ventas"] . " ventas";
                ?>
            </div>
        </div>
        <div class="row align-items-end justify-content-center mt-3 mb-3">
            <a href="index.php" class="list-group-item list-group-item-warning">Página inical</a>
            <a href="comercios.php" class="list-group-item list-group-item-success">Ver todas las compras de los comercios</a>
            <a href="nuevacompra.php" class="list-group-item list-group-item-info">Añadir nueva compra</a>
        </div>
    </div>
</body>

</html>