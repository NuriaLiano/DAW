<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Registro</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>

</head>


<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <p class="display-4 text-center text-light bg-dark">Registrate</p>
                <form action="#" class="border border-success pt-2 px-2 pb-5 mb-1" method="POST">

                    <div class="form-group mb-2">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control text-success" required placeholder="Su nombre">
                    </div>
                    <div class="form-group mb-2">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control text-success" required placeholder="Sus apellidos">
                    </div>
                    <div class="form-group mb-2">
                        <label for="usuario">Nick de usuario:</label>
                        <input type="text" name="usuario" id="usuario" class="form-control text-success" required placeholder="Su usuario">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Correo electrónico:</label>
                        <input type="mail" name="email" id="email" class="form-control text-success" required placeholder="Su email">
                    </div>
                    <div class="form-group mb-2">
                        <label for="contraseña">Contraseña:</label>
                        <input type="password" name="contraseña" id="contraseña" class="form-control mb-2" min="0" max="50" required placeholder="Debe contener entre 0-50 caracteres">
                    </div>
                    <div class="form-group mb-2">
                        <label for="contraseña2">Repita su contraseña:</label>
                        <input type="password" name="contraseña2" id="contraseña2" class="form-control mb-2" min="0" max="50" required placeholder="Debe contener entre 0-50 caracteres">
                    </div>
                    <input type="submit" id="registro" name="registro" value="REGISTRO" class="btn btn-success mt-2">
                </form>
                <a href="gestion.php" class="list-group-item list-group-item-action active">Volver</a>
                <?php
                require_once "funciones.php";
                if (isset($_POST["registro"])) {
                    $usuario = $_POST["usuario"];
                    $contraseña =md5( $_POST["contraseña"]);
                    $contraseña2 = md5($_POST["contraseña2"]);

                    if (contraseñaCorrecta($contraseña, $contraseña2)) {
                        if (addUsuario($usuario, $contraseña)) {
                            echo "<div class='alert alert-success mt-2' role='alert'>";
                            echo "Usuario añadido correctamente!";
                            echo "</div>";
                        } else {
                            echo "<div class='alert alert-danger mt-2' role='alert'>";
                            echo "Error al añadir al usuario!";
                            echo "</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger mt-2' role='alert'>";
                        echo "Las contraseñas no coinciden!";
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