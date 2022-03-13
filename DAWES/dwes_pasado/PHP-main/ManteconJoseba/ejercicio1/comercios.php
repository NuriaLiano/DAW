<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comercios</title>
    <link rel='stylesheet' href='bootstrap-4.5.3-dist\css/bootstrap.min.css'>

</head>
<?php
require_once "querysPDO.php";
$comercios = getComercio();
//$ventas = getVentas();
?>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12">
                <p class="display-4 text-center text-light bg-dark">Ventas de comercios</p>
            </div>
            <div class="col-12">
                <form action='<?php echo $_SERVER['PHP_SELF'] ?>' class="border border-success pt-2 px-2 pb-5 mt-3" method="POST">
                    <div class="form-group">
                        <label for="comercio">Comercio: </label>
                        <select name="comercio" id="comercio" class="form-control border border-success text-center">
                            <?php foreach ($comercios as $comercio) : ?>
                                <option value="<?= $comercio["nombre"]; ?>"> <?= $comercio["nombre"] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <input type="submit" id="consultar" value="consultar" class="btn btn-warning mt-2">
                    <div class="form-control mt-2">
                        <table class="table table-striped table-success table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Cliente</th>
                                    <th>Importe</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <?php foreach ($ventas as $venta) : ?>
                                <tr>
                                    <td>
                                        <?= $venta["nombre"] . " ". $venta["apellidos"] ?>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control text-center bg-light" value="<?= $ventas["importe"] ?>">
                                    </td>
                                    <td>
                                        <?= $venta["fecha"] ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </form>
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