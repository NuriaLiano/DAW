<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
</head>

<body>
    <h1>PELICULAS MUY MACHETES</h1>
    <form action="#" method="POST">
        <label for="buscar">Buscador</label>
        <input type="search" name="buscador" id="buscardor"><br><br>
        <input type="submit" name="enviar" id="enviar">
    </form>

    <?php

    $peliculas = array(
        array("titulo" => "Scarface", "imagen" => "scarface.jpg"),
        array("titulo" => "SAW", "imagen" => "saw.jpg"),
        array("titulo" => "Scent of a Woman", "imagen" => "esencia.jpg"),
        array("titulo" => "North by Northwest", "imagen" => "talones.jpg"),
        array("titulo" => "Godfellas", "imagen" => "goodfellas.jpg"),
        array("titulo" => "The Usual Suspects", "imagen" => "sospechosos.jpg"),
        array("titulo" => "Pulp Fiction", "imagen" => "pulp.jpg"),
        array("titulo" => "Good Will Hunting", "imagen" => "indomable.jpg"),
        array("titulo" => "La ventana indiscreta", "imagen" => "ventana.jpg"),
        array("titulo" => "The King of Comedy", "imagen" => "rey.jpg"),
        array("titulo" => "The Irishman", "imagen" => "irlandes.jpg"),
        array("titulo" => "Uncut Gems", "imagen" => "diamantes.jpg"),
        array("titulo" => "The Lighthouse", "imagen" => "faro.jpg"),
        array("titulo" => "Jackie Brown", "imagen" => "jackie.jpg")

    );

    if (isset($_POST['buscador'])) {
        $html = "<table class='table'>";
        $buscador = strtolower($_POST['buscador']);
        foreach ($peliculas as $peli) {
            if (strpos(strtolower($peli['titulo']), $buscador) !== false) {
                $html .= "<tr><td><img src='pelis/{$peli['imagen']}'/></td><td><h3>{$peli['titulo']}</h3></td></tr>";
            }
        }
    }

    $html .= "</table>";
    /*

    $buscador = $_POST["buscador"];
    foreach ($peliculas as $item) {
        $titulo = $item;
        if (strpos($titulo, $buscador) != false) {
            $coincidencias[] = $titulo;
        }
    }
    echo $coincidencias;

    
    function busqueda($arrayPeliculas)
    {
        $resultado = array();
        if (isset($_REQUEST["pelicula"])) {
            $busqueda = $_REQUEST["pelicula"];
            foreach ($arrayPeliculas as $nombrePelicula) {
                if (strpos($nombrePelicula, $busqueda) === false) {
                } else {
                    $resultado[] = $nombrePelicula;
                };
            }
            return $resultado;
        }
    }
*/

    ?>
</body>

</html>