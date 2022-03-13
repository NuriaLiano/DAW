<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Libros</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <p class="display-4 text-center text-primary">Inserte los datos del libro</p>
                <form action="libros_guardar.php" class="border border-success pt-2 px-2 pb-5" method="POST">
                    <legend class="text-center bg-dark text-light">Complete los campos</legend>
                    <div class="form-control mb-2">
                        <label for="titulo">Titulo:</label>
                        <input type="text" name="titulo" id="titulo" class="form-control">
                    </div>
                    <div class="form-control mb-2">
                        <label for="año_edicion">Año de edición:</label>
                        <input type="number" name="año_edicion" id="año_edicion" class="form-control mb-2" min="0" max="2050" required>
                    </div>
                    <div class="form-control mb-2">
                        <label for="precio">Precio(€):</label>
                        <input type="number" name="precio" id="precio" class="form-control mb-2" step="0.01" min="0" required>
                    </div>
                    <div class="form-control mb-2">
                        <label for="fecha_adquisicion">Fecha de adquisición:</label>
                        <input type="date" name="fecha_adquisicion" id="fecha_adquisicion" class="form-control" required />
                    </div>
                    <input type="submit" id="añadir" value="Guardar datos del libro" class="btn btn-success mt-2">
                </form>
                <a href="libros_datos.php" class="list-group-item list-group-item-action active mb-2">Mostrar los libros guardados</a>
                <a href="libros_borrar.php" class="list-group-item list-group-item-danger mb-5">Borrar libros</a>
            </div>
        </div>
    </div>
</body>
<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>

</html>