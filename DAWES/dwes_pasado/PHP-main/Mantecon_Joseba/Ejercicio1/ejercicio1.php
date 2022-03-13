<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Joseba Mantecon</title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Document</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>

<body>
    <?php
    /*$datos = array(
        "Ciudades" => array(
            "Torrelavega" => array(85, 68, 67, 86, 62, 54, 39, 61, 84, 99, 120, 115),
            "Sevilla" => array(76, 73, 66, 53, 34, 14, 1, 3, 18, 69, 87, 82),
            "Madrid" => array(43, 44, 35, 45, 44, 28, 11, 11, 30, 51, 58, 50)
        )

    );*/

    $datos = array(

        "Ciudades" => array("Torrelavega", "Sevilla", "Madrid"),
        "c1" => array(85, 68, 67, 86, 62, 54, 39, 61, 84, 99, 120, 115),
        "c2" => array(76, 73, 66, 53, 34, 14, 1, 3, 18, 69, 87, 82),
        "c3" => array(43, 44, 35, 45, 44, 28, 11, 11, 30, 51, 58, 50)
    );

    ?>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <p class="display-4 text-center bg-primary text-white rounded">COMPROBAR PRECIPITACIONES</p>
                <form action="#" method="POST" class="border border-primary p-2 mb-5 rounded">
                    <legend class="text-center header text-light bg-dark ">CIUDADES</legend>
                    <div class="form-group">
                        <label for="edad">Ciudades:</label>
                        <?php
                        foreach ($datos["Ciudades"] as $key => $item) {
                           /* echo"
                            <div class='form-group ml-5'>";
                           echo 
                           "<input type='radio' name='ciudad' id='$item' class='form-check-input' value='$item'";if(isset($_POST['Ciudades'])&&$_POST['Ciudades']==$key)echo "selected='true'>";echo"$item";
                           echo
                           "</div>"*/
                           echo "<div class='form-group ml-5'>";
                               echo "<input type='radio' name='ciudad' id='$item' class='form-check-input' value='$item'";if(isset($_POST['Ciudad'])&&$_POST['Ciudad']==$key)echo "selected='true'";
                                    
                                echo">$item</div>";
                        };
                        ?>

                    </div>
                    <div class="form-group">
                        <label for="precipitacion">Precipitación media:</label>
                        <input type="number" name="precipitacion" id="precipitacion" class="form-control" value="<?php echo (isset($_POST['precipitacion']))?$_POST['precipitacion']:'';?>">
                    </div>
                    <button type="submit" class="btn btn-success border border-primary offset-5">Comprobar</button>
                </form>
            </div>
        </div>
    </div>
    <?php 
    
    if (isset($_POST)) {
        $precipitacion = $_POST["precipitacion"];
        $media = 0;
        $total = 0;
        switch ($ciudad = $_POST["ciudad"]) {
            case $ciudad == $datos["Ciudades"][0]:
                foreach ($datos["c1"] as $item) {
                    $total += $item;
                    $media = $total / 12;
                }
                if ($media>$precipitacion) {
                    echo "La media de Torrelavega es mayor que ".$precipitacion." concretamente es de:"  . $media." mm";
                }else{
                    echo "La media de Torrelavega es menor que ".$precipitacion." concretamente es de:"  . $media." mm";
                }
                break;
            case $ciudad == $datos["Ciudades"][1]:
                foreach ($datos["c2"] as $item) {

                    $total += $item;
                    $media = $total / 12;
                }
                if ($media>$precipitacion) {
                    echo "La media de Sevilla es mayor que ".$precipitacion." concretamente es de:"  . $media." mm";
                }else{
                    echo "La media de Sevilla es menor que ".$precipitacion." concretamente es de:"  . $media." mm";
                }

                break;
            case $ciudad == $datos["Ciudades"][2]:
                foreach ($datos["c3"] as $item) {
                    $total += $item;
                    $media = $total / 12;
                }
                if ($media>$precipitacion) {
                    echo "La media de Madrid es mayor que ".$precipitacion." concretamente es de:"  . $media." mm";
                }else{
                    echo "La media de Madrid es menor que ".$precipitacion." concretamente es de:"  . $media." mm";
                }

                break;
        }
    }
    ?>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>