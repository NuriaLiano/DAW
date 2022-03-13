<?php
    require('funcionesBaseDatos.php'); //llama a la pagina
    
    if(isset($_POST['enviar'])){
        if(
            isset($_POST['titulo']) && !empty($_POST['titulo']) &&
            isset($_POST['anoEdicion']) && !empty($_POST['anoEdicion']) &&
            isset($_POST['precio']) && !empty($_POST['precio']) &&
            isset($_POST['fechaAdq']) && !empty($_POST['fechaAdq']) 
        ){
            //titulo,ano_edicion,precio,fecha_adquisicion
            $data = [
                $_POST['titulo'],
                $_POST['anoEdicion'],
                $_POST['precio'],
                $_POST['fechaAdq']
            ];

            $success = insertarLibro($data);
            if($success) {
                echo "Libro guardado correctamente";
            } else {
                echo "Libro no guardado";
            }

        }
    }
    


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Examen ejercicio 1</title>
        <meta charset="UTF-8">
        <link href="estilo_hoja4_bbdd02.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Inserte los datos del libro</h1>
        
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

        <a href="libros_guardar.php">Mostrar los libros guardados</a> 
    </body>
</html>

