<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer</title>
    <style>
        .resultado {
            height: 5em;
            line-height: 5em;
            color: white;
            font-size: large;
            font-weight: bold;
            padding-left: 1em;
            width: 100%;
            background-color: blue;
        }

        .moneda,
        .origen,
        .destino {
            margin-left: 2em;
            margin-top: 1em;
            margin-bottom: 1em;
        }

        .moneda label,
        .origen label,
        .destino label {
            margin-right: 10em;
        }

        input[type=submit] {
            color: white;
            background-color: green;
        }

        .origen select,
        .destino select {
            margin-right: 10em;
        }

        form hr {
            color: #ddd;
        }
    </style>

</head>

<body>
    <?php
    $resultado = "";
    $cantidad = 0;
    ?>
    <div class="resultado">
        <?php
        if (!empty($_POST)) {
            $cantidad = $_POST["cantidad"];
            $origen = $_POST["origen"];
            $destino = $_POST["destino"];
            
            $arraymon = [
                "euros" => [
                    "euros" => $cantidad,
                    "dolares" => $cantidad * 1.16,
                    "libras" => $cantidad * 0.84
                ],
                "dolares" => [
                    "dolares" => $cantidad,
                    "euros" => $cantidad / 1.16,
                    "libras" => $cantidad * 0.73
                ],
                "libras" => [
                    "libras" => $cantidad,
                    "euros" => $cantidad / 0.84,
                    "dolares" => $cantidad / 0.73
                ]
            ];

            $resultado = $arraymon[$origen][$destino];
            printf("%.2f en %s es %.2f %s", $cantidad, $origen, $resultado, $destino);
        }
        ?>
    </div>

    <h1>Conversor de monedas</h1>
    <hr>

    <!-- Formulario -->
    <form action="ejer1_2_Nuria.php" method="post">
        <div class="moneda">
            <label for="cantidad">Cantidad: </label>
            <input type="number" name="cantidad" min="0.01" step="0.01" value=<?= (!empty($cantidad)) ? $cantidad : 0.0 ?> id="cantidad" />
        </div>
        <hr>

        <div class="origen">
            <label for="monorigen">Origen: </label>
            <select name="monorigen" id="monorigen">
                <option value="euros" <?= (!empty($origen) && $origen == "euros") ? "selected" : ""; ?>>Euros</option>
                <option value="dolares" <?= (!empty($origen) && $origen == "dolares") ? "selected" : ""; ?>>Dólares</option>
                <option value="libras" <?= (!empty($origen) && $origen == "libras") ? "selected" : ""; ?>>Libras</option>
            </select>
        </div>
        <hr>

        <div class="destino">
            <label for="mondestino">Destino: </label>
            <select name="mondestino" id="mondestino">
                <option value="euros" <?= (!empty($destino) && $destino == "euros") ? "selected" : ""; ?>>Euros</option>
                <option value="dolares" <?= (!empty($destino) && $destino == "dolares") ? "selected" : ""; ?>>Dólares</option>
                <option value="libras" <?= (!empty($destino) && $destino == "libras") ? "selected" : ""; ?>>Libras</option>
            </select>
        </div>

        <input type="submit" value="Convertir" />
    </form>
</body>

</html>