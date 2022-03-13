<?php
require('funcionesRaulMYSQLI.php');


if (isset($_POST['enviar'])) {
    if (isset($_POST['libro_elegido']) && !empty($_POST['libro_elegido'])) {

        $resultado = borrarLibros($_POST['libro_elegido']);

        if (!$resultado) {
            foreach (verLibros() as $libro){
                echo "El ejemplar numero se ha borrado con exito su precio era de: ". $libro['precio'];
            }
        } else {
            echo "Se ha producido un error al borrar el libro";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>borrar libros</title>
    <meta charset="UTF-8">

</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>libro
            <?php

            echo "<select name='libro_elegido'>";
            foreach (mostrarLibros() as $libro) {

                echo "<option value=' " . $libro['ejemplar'] . "'>" . $libro['titulo'] . " (" . $libro['ano_edicion'] . ")" . "</option>";
            }
            echo "</select>";
            ?>
        </p>
        <input type="submit" value="Borrar" name="enviar">
    </form>
    <a href="librosDatosRaul.php">Volver</a>
</body>

</html>