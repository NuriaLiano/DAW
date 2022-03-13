<?php
require('funcionesRaulMYSQLI.php');

if (isset($_POST['enviar'])) {
    insertarLibro();
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Raul</title>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Inserte los datos del libro</h1>
    <hr />
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Titulo
            <input type="text" name="titulo">
        </p>
        <p>Año de edicion
            <input type="number" name="anoEdicion">
        </p>
        <p>Precio
            <input type="number" name="precio">
        </p>
        <p>Fecha de adquisicion
            <input type="date" name="fechaAdq">
        </p>
        <input type="submit" value="Guardar datos del libro" name="enviar">
    </form>

    <a href="librosGuardarRaul.php">Mostrar los libros guardados</a>
    <br /><br />
    <a href="librosBorrarRaul.php">Borrar Libros</a>
</body>

</html>