<?php 
include 'funcionesBaseDatos.php';

if(isset($_POST['borrar'])){
    if(isset($_POST['libro_elegido']) ){
        
        $success = borrarLibros($_POST['libro_elegido']);
        
        if(!$success){
            echo " libro borrado correctamente";
        }else{
            echo "el libro no se ha borrado";
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
        <form action="" method="post">
        <p>libro
            <?php
                echo "<select name='libro_elegido'>";
                foreach(mostrarLibros() as $libro){
                    
                    echo "<option value=' " .$libro['id']. "'>" .$libro['titulo'] ."(" .$libro['ano_edicion'].")"."</option>";
                   
                }
                echo "</select>";
            ?>
            </p>
            <input type="submit" value="Borrar" name="borrar">
        </form>
        <a href="libros.php">Volver</a>

            
    </body>
</html>