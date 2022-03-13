<?php
require_once "querys.php";
$nombreEquipos = getEquipos();
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <p class="display-4 text-center text-primary">Vaina de la vaina</p>
                <form action='<?php echo $_SERVER['PHP_SELF'] ?>' class="border border-success pt-2 px-2 pb-5" method="POST">

                    <div class="form-control">
                        <label for="equipo">Equipos</label>
                        <select name="equipos" id="equipos" class="form-control border border-success">
                            <?php while ($registro = $nombreEquipos->fetch()) : ?>
                                <option value="<?php echo $registro["nombre"] ?>" <?= $selectedProp = (isset($equipoSelected) && $equipoSelected == $registro["nombre"]) ? "selected" : ""; ?>>
                                    <?php echo $registro["nombre"] ?></option>
                            <?php endwhile ?>
                        </select>

                        <input type="submit" id="boton" value="mostrar" class="btn btn-success mt-2">

                    </div>
                    <div class="form-control">
                        <?php
                        if (isset($_POST["boton"])) {
                            echo "<table class='table table-striped'>";
                            while ($registro = $nombreEquipos->fetch()) {
                                echo "<tr>";
                                echo "<td>" .$registro["nombre"]. "</td>";
                                echo "</tr>";
                            }

                            echo "</table>";
                        }

                        ?>
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>