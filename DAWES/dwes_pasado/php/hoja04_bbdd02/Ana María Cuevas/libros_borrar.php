<?php
    require('funcionesBaseDatos.php'); //llama a la pagina

    if(isset($_POST['enviar'])){
        if(isset($_POST['libro_elegido']) && !empty($_POST['libro_elegido'])){
            
            $success = borrarLibros($_POST['libro_elegido']);

            if($success){
                echo $success;
                
                //echo "libro borrado correctamente, su precio era de " .$precio ."€"; 
                
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
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <p>libro
            <?php
                
                echo "<select name='libro_elegido'>";
                foreach(mostrarLibros() as $libro){
                    
                    echo "<option value=' " .$libro['ejemplar']. "'>" .$libro['titulo'] ."(" .$libro['ano_edicion'].")"."</option>";
                   
                }
                echo "</select>";
            ?>
            </p>
            <input type="submit" value="Borrar" name="enviar">
        </form>
        <a href="libros_datos.php">Volver</a>

            
    </body>
</html>