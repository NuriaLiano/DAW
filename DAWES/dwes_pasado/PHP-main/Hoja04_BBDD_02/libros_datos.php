<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Lista de libros</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>
<?php
require_once "funcionesBaseDatos.php";
$libros = getLibro();
?>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <p class="display-4 text-center text-primary">Lista de libros</p>

                <table class="table table-striped table-success table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Numero ejemplar</th>
                            <th>Titulo</th>
                            <th>Año edicion</th>
                            <th>Precio</th>
                            <th>Fecha dquisicion</th>
                        </tr>
                    </thead>
                    <?php foreach ($libros as $libro) : ?>
                        <tr>
                            <td>
                                <?= $libro["id"] ?>
                            </td>
                            <td>
                                <?= $libro["titulo"]  ?>
                            </td>
                            <td>
                                <?= $libro["año_edicion"] ?>
                            </td>
                            <td>
                                <?= $libro["precio"]  ?>
                            </td>
                            <td>
                                <?= $libro["fecha_adquisicion"]  ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <a href="libros.php" class="list-group-item list-group-item-action active mb-5">Volver</a>
            </div>
        </div>
    </div>
    </div>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>