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
    <?php

    $equipos = array(

        'Barcelona' =>  array(
            "entrenador" => array('xavi' => "imagenes/idolo.jpg"),
            "jugadores" => array('messi' => "imagenes/chiqui.jpg", 'ansu' => "imagenes/ansu.jpg", 'griezman' => "imagenes/griez-jpg", 'coutinho' => "imagenes/cou.jpg", 'frankie' => "imagenes/frank.jpg")
        ),


        'Madrid' =>    array(
            "entrenador" => array('zizou' => "imagenes/zidane.jpg"),
            "jugadores" => array('ramos' => "imagenes/ramos.jpg", 'thibaut ' => "imagenes/amog.jpg", 'casemiso' => "imagenes/case.jpg", 'benzema' => "imagenes/karim.jpg", 'modric' => "imagenes/luka.jpg")
        ),

    );
    ?>

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-6 mt-5">
                <p class="display-4">Elige un equipo</p>
                <form class="border border-success pt-2 px-2 pb-5" action='<?php echo $_SERVER['PHP_SELF'] ?>' method="POST">
                    <div class="form-group">
                        <label for="equipo">Equipo:</label>
                        <select class='form-control' name="equipo">
                            <?php

                            foreach ($equipos as $key => $item) {
                                print("
                                <option value='$key'>$key</option>
                                ");
                            };

                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="puesto">Puesto:</label><br>
                        <input type="radio" id="entrenador" value="entrenador">
                        <label for="entrenador">Entrenador</label>
                        <input type="radio" id="jugadores" value="jugadores">
                        <label for="jugadores">Jugadores</label>

                    </div>
                    <button type="submit" class="btn btn-dark rounded" name="buscar">Buscar</button>
                    <div class="from-group mt-3">
                        <?php
                        if (isset($_POST["buscar"]) && isset($_POST["entrenador"])) {
                            echo
                                "<table class='table'>";
                            foreach ($equipos[$_POST['equipo']] as $persona) {
                                foreach ($persona as $key => $imagen) {
                                    echo "
                            <thead class='thead-dark'>
                                <tr>
                                  <th scope='col' >" . "$key" . "</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>" . "$item" . "</td>
                                </tr>
                            </tbody>";
                                    echo "</table>";
                                }
                            };
                        }

                        if (isset($_POST["buscar"]) && isset($_POST["jugadoresººººº"])) {
                            foreach ($equipos[$_POST['equipo']] as $key => $item) {

                                echo
                                    "<table class='table'>
                            <thead class='thead-dark'>
                                <tr>
                                  <th scope='col' >" . "$item" . "</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>" . "$item" . "</td>
                                </tr>
                            </tbody>
                        </table>";
                            }
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