<?php 
include 'conexionBD.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>

<body>
<form action="#" method="post">
    <h1>INSERTE LOS DATOS DEL LIBRO</h1>
    <h2>*Campo obligatorio</h2>
    <hr/>
    <fieldset><label for="">Titulo: </label>
        <input type="text" name="titulo"></fieldset>
    <fieldset> <label for="">Año de edicion:</label>
        <input type="number" name="ano_edicion"></fieldset>
    <fieldset><label for="">Precio:</label>
        <input type="number" name="precio"></fieldset>
    <fieldset><label for="">Fecha de adquisicion:</label>
        <input type="date" name="fecha_adquisicion"></fieldset>
    <input type="submit" value="Guardar datos del libro" name="guardar">
    <hr/>
    <a href="libros_datos.php">Mostrar los libros guardados</a>
    <a href="libros_borrar.php">Borrar libros</a>
    
</form>
</body>
</html>
<?php 
if (isset($_POST['guardar'])) {
    $conexion = getConnexion();
    $todoOk = true; // Definimos una variable para comprobar la ejecución
    
    $titulo = $_POST['titulo'];
    $ano_edicion = $_POST['ano_edicion'];
    $precio = $_POST['precio'];
    $fecha_adquisicion = $_POST['fecha_adquisicion'];
    
    $conexion->autocommit(false); // Deshabilitamos el modo transaccional automático
        
    $sql = 'INSERT INTO libros (titulo,ano_edicion,precio,fecha_adquisicion) VALUES ("'.$titulo.'","'.$ano_edicion.'","'.$precio.'","'.$fecha_adquisicion.'")';
    
    if ($conexion->query($sql) != true)$todoOk = false; // Si hay error ponemos false
                         // Si todo fue bien, confirmamos los cambios y en caso contrario los deshacemos
    if ($todoOk == true) {
        $conexion->commit();
        print "<p>Los cambios se han realizado correctamente.</p>";
    } else {
        $conexion->rollback();
        print "<p>No se han podido realizar los cambios.</p>";
    }
        
}
?>