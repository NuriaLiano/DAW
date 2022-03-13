<?php
require('funcionesRaulPDO.php'); 

if(isset($_POST['enviar'])){
    if(
        isset($_POST['titulo']) && !empty($_POST['titulo']) &&
        isset($_POST['anoEdicion']) && !empty($_POST['anoEdicion']) &&
        isset($_POST['precio']) && !empty($_POST['precio']) &&
        isset($_POST['fechaAdq']) && !empty($_POST['fechaAdq'])
        ){
           
            $datosLibros = [
                $_POST['titulo'],
                $_POST['anoEdicion'],
                $_POST['precio'],
                $_POST['fechaAdq']
            ];
            
            $consulta = insertarLibro($datosLibros);
            if($consulta) {
                echo "<strong>Datos guardados correctamente</strong>";
            } else {
                echo "Error, no han podido registrar los datos";
            }           
    }
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
        <hr/>       
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
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

        <a href="librosGuardarRaulPDO.php">Mostrar los libros guardados</a> 
        <br/><br/>
        <a href="librosBorrarRaulPDO.php">Borrar Libros</a> 
    </body>
</html>

