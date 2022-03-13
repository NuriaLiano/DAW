<?php
require('funcionesRaulPDO.php');

if (isset($_POST['enviar'])) {
    if (isset($_POST['libro_elegido']) && !empty($_POST['libro_elegido'])) {

        $resultado = borrarLibros($_POST['libro_elegido']);

        if (!$resultado) {
            echo "El ejemplar numero " . ($_POST['libro_elegido']) . " se ha borrado con exito";
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
    <a href="librosDatosRaulPDO.php">Volver</a>
</body>

</html>