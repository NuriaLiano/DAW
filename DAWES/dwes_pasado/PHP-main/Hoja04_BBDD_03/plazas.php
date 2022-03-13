<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plazas</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>
<?php
require_once "funciones.php";
$plazas = getAsiento();
?>

<body>
    <div class="container">

        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-6">
                <p class="display-4 text-center text-warning">Gestión de plazas</p>
                <form action='<?php echo $_SERVER['PHP_SELF'] ?>' class="border border-success pt-2 px-2 pb-5 mt-3" method="POST">
                    <div class="form-control mt-2">
                        <table class="table table-striped table-success table-hover text-center">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Plaza</th>
                                    <th>Precio(€)</th>
                                </tr>
                            </thead>
                            <?php foreach ($plazas as $plaza) : ?>

                                <tr>
                                    <td>
                                        <?= $plaza["numero"] ?>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control text-center bg-light" value="<?= $plaza["precio"] ?>">
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <input type="submit" id="actualizar" value="ACTUALIZAR" class="btn btn-warning mt-2">
                </form>
                <a href="gestion.php" class="list-group-item list-group-item-action active mt-2">Volver</a>
           </div>
        </div>
    </div>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>