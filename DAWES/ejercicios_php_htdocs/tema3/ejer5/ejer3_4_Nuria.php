<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejer</title>
    <style>
    
        input[type=submit] {
            margin-top: 1em;
            color: white;
            background-color: green;
            font-weight: bold;
            padding: 0.5em;
            margin-bottom: 2em;
        }

        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 0.5em 2em;
            font-weight: bold;
            color: gray
        }

        tr:nth-child(2n) {
            background-color: lightgreen;
        }

        .resultado {
            height: 5em;
            line-height: 5em;
            color: white;
            font-size: large;
            font-weight: bold;
            padding-left: 1em;
            width: 100%;
            background-color: mediumblue;
        }
    </style>

</head>

<body>
    <?php
    
    function ruta_pelicula($pelicula)
    {
        return sprintf("img/%s.jpg", $pelicula);
    }

    
    $invetario_pelis = [
        "Amelie" => "amelie",
        "El lobo de Wall Street" => "el_lobo",
        "El pianista" => "el_pianista",
        "12 años de esclavitud" => "esclavitud",
        "Malditos bastardos" => "malditos_bastados",
        "Memento" => "memento",
        "No es país para viejos" => "no_es_pais_para_viejos",
        "Origen" => "origen",
        "Spotlight" => "spotlight",
        "Terminator" => "terminator"
    ];
    ?>

    
    <h1>Buscador de pelis</h1>
    <hr />
    <form action="ejer3_4_Nuria.php" method="post">
        <div>
            <label for="peliabuscar">Pelicula: </label>
            <input type="text" name="peliabuscar" id="peliabuscar" title="Pelicula a buscar..." placeholder="Pelicula a buscar..." required>
        </div>

        <input type="submit" value="Buscar">
    </form>
    <?php
    if (!empty($_POST)) {
        $peliabuscar = $_POST["peliabuscar"];
        $resultados_busqueda = [];
        foreach ($invetario_pelis as $titulo => $ruta_base) {
            if (stripos($titulo, $peliabuscar) !== false) {
                $resultados_busqueda[$titulo] = ruta_pelicula($ruta_base);
            }
        }
        $numero_encontradas = count($resultados_busqueda);
    ?>
    <div class="resultado">
        <?= $numero_encontradas ?> pelicula(s) encontradas para la busqueda "<?= $peliabuscar ?>"
    </div>
    <?php
        if ($numero_encontradas > 0) {
    ?>
        <table>
            <?php
            foreach ($resultados_busqueda as $titulo => $ruta_pelicula) {
            ?>
                <tr>
                    <td><img src="<?= $ruta_pelicula ?>" alt="<?= $titulo ?>"></td>
                    <td><?= $titulo ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    <?php
            }
        }
    
    ?>
</body>

</html>