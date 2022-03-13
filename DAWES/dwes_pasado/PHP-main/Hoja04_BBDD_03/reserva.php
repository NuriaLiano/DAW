<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Reserva</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>

</head>

<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <p class="display-4 text-center text-light bg-dark">Reserva de asiento</p>
                <form action="#" class="border border-success pt-2 px-2 pb-5 mb-1" method="POST">
                    <div class="form-group mb-2">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control text-success" required placeholder="Su nombre">
                    </div>
                    <div class="form-group mb-2">
                        <label for="dni">DNI:</label>
                        <input type="text" name="dni" id="dni" class="form-control mb-2" min="9" max="9" required placeholder="Su DNI">
                    </div>
                    <div class="form-group">
                        <label for="asiento">Asiento: </label>
                        <select name="asiento" id="asiento" class="form-control border border-success text-center">
                            <?php foreach ($asientos as $asiento) : ?>
                                <option value="<?= $asiento["numero"]; ?>"> <?= $asiento["numero"] . " (" . $asiento["precio"] . ")€" ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <input type="submit" id="reservar" name="reservar" value="RESERVAR" class="btn btn-success mt-2">
                </form>
                <a href="gestion.php" class="list-group-item list-group-item-action active">Volver</a>
                <?php
                require_once "funciones.php";
                $asientos = getAsiento();
                if (isset($_POST["reservar"])) {
                    $nombre = $_POST["nombre"];
                    $dni = $_POST["dni"];
                    $numero_plaza = $_POST["asiento"];
                    if (addPasajero($dni, $nombre, $numero_plaza)) {
                        echo "<div class='alert alert-success mt-2' role='alert'>";
                        echo "Pasajero añadido correctamente!";
                        echo "</div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>";
                        echo "Error al añadir al pasajero!";
                        echo "</div>";
                    }
                };

                ?>
            </div>
        </div>
    </div>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>