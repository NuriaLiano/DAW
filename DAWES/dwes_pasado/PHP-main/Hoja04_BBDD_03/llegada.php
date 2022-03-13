<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Llegada</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>
<?php
require_once "funciones.php";
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "<div class='alert alert-danger' role='alert'>";
    echo "Usuario no reconocido!";
    echo "</div>";
    exit();
} else {
    if (!usuarioCorrecto($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
        header('WWW-Authenticate: Basic Realm="Contenido restringido"');
        header('HTTP/1.0 401 Unauthorized');
        exit();
    }
    echo "<div class='alert alert-success mt-2' role='alert'>";
    echo "Usuario aceptado!";
    echo "</div>";
}
?>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <p class="display-4 text-center text-light bg-dark border border-bottom">Llegada al destino</p>
                <form action="#" class="pt-2 mb-2" method="POST">
                    <input type="submit" name="llegada" id="llegada" class="btn btn-success" value="LLEGADA">
                </form>
                <a href="gestion.php" class="list-group-item list-group-item-action active">Volver</a>
                <?php
                require_once "funciones.php";
                if (isset($_POST["llegada"])) {
                    if (llegada()) {
                        echo "<div class='alert alert-success mt-2' role='alert'>";
                        echo "Todos los pasajeros han llegado sin bajas!";
                        echo "</div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>";
                        echo "Ha habido un accidente mortal durante el viaje!";
                        echo "</div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>