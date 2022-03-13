<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Libros guardar</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
    <?php
    require_once "funcionesBaseDatos.php";
    $libros = getLibro();
    ?>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <p class="display-4 text-center text-light bg-danger">Borrado de libros</p>
                <form action='<?php echo $_SERVER['PHP_SELF'] ?>' class="border border-danger pt-2 px-2 pb-5" method="POST">
                    <div class="form-group">
                        <label for="equipos">Libro: </label>
                        <select name="libros" id="libros" class="form-control border border-danger text-center">
                            <?php
                            require_once "funcionesBaseDatos.php";
                            foreach ($libros as $libro) : ?>
                                <option value="<?= $libro["id"]; ?>"> <?= $libro["titulo"], ' (año ' . $libro["año_edicion"] . ')' ?> </option>
                            <?php endforeach; ?>
                        </select>
                        <input type="submit" id="boton" value="BORRAR" class="btn btn-danger mt-2 text-center">
                    </div>
                </form>
                <a href="libros.php" class="list-group-item list-group-item-action active mt-3">Volver</a>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST["libros"])) {
        if (borrarLibro($_POST["libros"])) {
            echo "<div class='alert alert-success mt-2' role='alert'>";
            echo "Libro borrado correctamente!";
            echo "</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>";
            echo "Error al borrar el libro!";
            echo "</div>";
        }
    }
    ?>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>