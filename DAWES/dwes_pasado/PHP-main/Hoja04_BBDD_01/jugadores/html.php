<?php

function getConexion()
{
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $conexion = new PDO('mysql:host=localhost;dbname=dwes_01_nba', 'root', '', $opciones);
    //unset($conexion);
    return $conexion;
}

$conexion = getConexion();

function getEquipos($conexion)
{
    /*
    $equipos = $conexion->query('SELECT nombre FROM equipos')->fetchAll();
    return $equipos;
    */
    $resultado = $conexion->query('SELECT nombre FROM equipos');
    $objetoDatos = $resultado->fetch();
    while ($objetoDatos != null) {
        $equipos[] = $objetoDatos["nombre"];
        $objetoDatos = $resultado->fetch();
    }
    return $equipos;
}

function getJugadores($conexion, $equipos)
{
    /*
    $jugadores = $conexion->query('SELECT nombre, peso FROM jugadores WHERE nombre_equipo="' . $equipos . '"')->fetchAll();
    return $jugadores;
    */
    $resultado = $conexion->query('SELECT nombre, peso FROM jugadores WHERE nombre_equipo="' . $equipos . '"');
    $objetoDatos = $resultado->fetch();
    while ($objetoDatos != null) {
        //objetos de [0] es nombre, y objetos de [1] es peso
        //objetos es a su vez jugador
        $jugador[] = array($objetoDatos["nombre"], $objetoDatos["peso"]);
        $objetoDatos = $resultado->fetch();
    }
    return $jugador;
}

function getPosicion($conexion)
{
    $resultado = $conexion->query('SELECT distinct posicion FROM jugadores');
    $objetoDatos = $resultado->fetch();
    while ($objetoDatos != null) {
        $posicion[] = $objetoDatos["posicion"];
        $objetoDatos = $resultado->fetch();
    }
    return $posicion;
}
function traspaso($codigoJugador, $nombre, $procedencia, $altura, $peso, $posicion, $equipo)
{
    #$nuevoCodigo = getUltimoCodigoJugador() + 1;
    $correcto = false;
}
function actualizarPeso($jugadores, $pesos, $conexion)
{
    $resultado = $conexion->query('update jugadores set peso = ? where codigo = ?');
    $sentencia = $resultado->stmt_init();
    $sentencia->prepare($resultado);
}
?>



<?php
if (isset($_POST)) {
    $equipos = $_POST["equipos"];
    $jugadores = getJugadores($conexion, $equipos);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos NBA</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>

<body>

    <div class="container">

        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-6">
                <p class="display-4 text-center text-primary">Equipos NBA</p>
                <form action='<?php echo $_SERVER['PHP_SELF'] ?>' class="border border-success pt-2 px-2 pb-5" method="POST">
                    <div class="form-control">
                        <label for="equipos">Equipos: </label>
                        <select name="equipos" id="equipos" class="form-control border border-success text-center">
                            <?php foreach (getEquipos($conexion) as $equipos) : ?>
                                <option value="<?= $equipos; ?>"> <?= $equipos ?> </option>
                            <?php endforeach; ?>
                        </select>
                        <input type="submit" id="boton" value="MOSTRAR" class="btn btn-primary mt-2 text-center">
                    </div>
                    <div class="form-control mt-2">
                        <table class="table table-striped table-success table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Peso</th>
                                </tr>
                            </thead>
                            <?php foreach ($jugadores as $jugador) : ?>
                                <tr>
                                    <td>
                                        <?= $jugador[0] ?>
                                    </td>
                                    <td>
                                        <?= $jugador[1] . " kg" ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </form>
                <p class="display-4 text-center text-danger">Alta y baja de jugadores</p>
                <form action='<?php echo $_SERVER['PHP_SELF'] ?>' class="border border-success pt-2 px-2 pb-5 mt-3" method="POST">
                    <legend class="text-center header text-light bg-dark">Traspasos</legend>
                    <label for="baja">Baja del jugador:</label>
                    <select name="baja" id="baja" class="form-control border border-success mb-3">
                        <?php foreach ($jugadores as $jugador) : ?>
                            <option value="<?= $jugador[0]; ?>" selected='true'> <?= $jugador[0] ?> </option>
                        <?php endforeach; ?>
                    </select>
                    <legend class="text-center header text-light bg-dark">Datos del nuevo jugador:</legend>
                    <div class="form control">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
                    <div class="form control">
                        <label for="procedencia">Procedencia:</label>
                        <input type="text" name="procedencia" id="procedencia" class="form-control">
                    </div>
                    <div class="form control">
                        <label for="altura">Altura:</label>
                        <input type="number" name="altura" id="altura" class="form-control text-success" step=".01" placeholder="0.00">
                    </div>
                    <div class="form control">
                        <label for="peso">Peso:</label>
                        <input type="number" name="peso" id="peso" class="form-control text-success" step=".01" placeholder="0.00">
                    </div>
                    <div class="form control">
                        <label for="posicion">Posición:</label>
                        <select name="posicion" id="posicion" class="form-control border border-success text-center mb-3">
                            <?php foreach (getPosicion($conexion) as $posicion) : ?>
                                <option value="<?= $posicion; ?>"> <?= $posicion ?> </option>
                            <?php endforeach; ?>
                        </select>
                        <input type="submit" id="traspaso" value="TRASPASO" class="btn btn-danger mt-2">
                    </div>
                </form>
                <p class="display-4 text-center text-warning">Modificaciones</p>

                <form action='<?php echo $_SERVER['PHP_SELF'] ?>' class="border border-success pt-2 px-2 pb-5 mt-3" method="POST">
                    <div class="form-control mt-2">
                        <table class="table table-striped table-success table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Peso (kg)</th>
                                </tr>
                            </thead>
                            <?php foreach ($jugadores as $jugador) : ?>

                                <tr>
                                    <td>
                                        <?= $jugador[0] ?>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control text-center bg-light" value="<?= $jugador[1] ?>">
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <input type="submit" id="actualizar" value="ACTUALIZAR" class="btn btn-warning mt-2">
                </form>
            </div>
        </div>
    </div>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>