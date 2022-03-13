<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='bootstrap-4.5.3-dist\css/bootstrap.min.css'>

</head>
<?php
require_once "querysPDO.php";
$clientes = getCliente();
$comercios = getComercio();

?>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <p class="display-4 text-center text-light bg-dark">Insertar nueva compra</p>
                <form action="#" class="border border-success pt-2 px-2 pb-5 mb-1" method="POST">
                    <div class="form-group">
                        <label for="comercio">Comercio: </label>
                        <select name="comercio" id="comercio" class="form-control border border-success text-center">
                            <?php foreach ($comercios as $comercio) : ?>
                                <option value="<?= $comercio["nombre"]; ?>"> <?= $comercio["nombre"] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cliente">Cliente: </label>
                        <select name="cliente" id="cliente" class="form-control border border-success text-center">
                            <?php foreach ($clientes as $cliente) : ?>
                                <option value="<?= $cliente["nombre"]; ?>"> <?= $cliente["nombre"] . " " . $cliente["apellidos"] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="fecha">Fecha:</label>
                        <input type="date" name="fecha" id="fecha" class="form-control mb-2">
                    </div>
                    <div class="form-group mb-2">
                        <label for="importe">Importe:</label>
                        <input type="number" name="importe" id="importe" class="form-control mb-2" step="0.01">
                    </div>
                    <input type="submit" id="insertar" name="insertar" value="Insertar compra" class="btn btn-success mt-2">
                </form>
                <a href="gestion.php" class="list-group-item list-group-item-action active">Volver</a>
                <?php
                require_once "querysPDO.php";
                if (isset($_POST["insertar"])) {
                    //pongo los ids a mano para que me haga la insercion al menos
                    $id_cliente = 1;
                    $id_comercio = 1;
                    $fecha = $_POST["fecha"];
                    $importe = $_POST["importe"];
                    if (addCompra($id_cliente, $id_comercio, $fecha, $importe)) {
                        echo "<div class='alert alert-success mt-2' role='alert'>";
                        echo "Compra añadida correctamente!";
                        echo "</div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>";
                        echo "Error al añadir la compra!";
                        echo "</div>";
                    }
                };

                ?>
            </div>
            <div class="row align-items-end justify-content-center mt-3 mb-3">
                <a href="index.php" class="list-group-item list-group-item-warning">Página inical</a>
                <a href="comercios.php" class="list-group-item list-group-item-success">Ver todas las compras de los comercios</a>
                <a href="nuevacompra.php" class="list-group-item list-group-item-info">Añadir nueva compra</a>
            </div>
        </div>
    </div>
</body>

</html>