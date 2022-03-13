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
    $datos = array(
        //si no pongo esta key seria la posicion 0
        //$item sirve para cuando pongo abreviaturas o algo como aqui abajo, y entonces el item es ya comedia
        "Genero" => array(/*"C" =>*/"Comedia", "Drama", "Acción", "Triller", "Western"),
        //esta seria la posicion 1
        "Edad" => array("Todos los públicos", "Mayores de 7 años", "Mayores de 12 años", "Mayores de 18")
    );


    ?>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <p class="display-4 text-center bg-primary text-white rounded">SERIES DE TELEVISIÓN</p>
                <form action="#" method="POST" class="border border-primary p-2 mb-5 rounded">
                    <legend class="text-center header text-light bg-dark ">Introduce los datos</legend>
                    <div class="form-group">
                        <label for="titulo">Titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo">
                    </div>
                    <div class="form-group">
                        <label for="actores">Actores:</label>
                        <input type="text" class="form-control" id="actores" name="actores">
                    </div>
                    <div class="form-group">
                        <label for="director">Director:</label>
                        <input type="text" class="form-control" id="director" name="director">
                    </div>
                    <div class="form-group">
                        <label for="temporadas">Nº de temporadas:</label>
                        <input type="number" name="temporadas" id="temporadas" required min="1" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="genero">Genero:</label>
                        <select name="genero" id="genero" class="form-control">
                            <?php
                            //puedo poner datos de "genero" o datos de 0
                            foreach ($datos["Genero"] as $key) {
                                print("
                               <option value='$key'>$key</option>
                               ");
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad recomendada:</label>
                        <?php
                        foreach ($datos["Edad"] as $key) {
                            print("
                            <div class='form-group ml-5'>
                            <input type='radio' name='edad' value='$key' id='$key' class='form-check-input'>$key
                            </div>
                            ");
                        }
                        ?>

                    </div>
                    <div class="form-group">
                        <label for="temporadas">Psinopsis:</label>
                        <textarea name="psinopsis" id="psinopsis" cols="50" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Selecciona una imagen:</label>
                        <input type="file" class="form-control-file bg-primary text-white border border-dark" id="imagen" accept="image/jpg">
                    </div>
                    <button type="submit" class="btn btn-success border border-primary offset-5">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>