<?php
require('funcionesRaulPDO.php'); 

if(isset($_POST['enviar'])){
    if(isset($_POST['libro_elegido']) && !empty($_POST['libro_elegido'])){
        
        $resultado = borrarLibros($_POST['libro_elegido']);
        
        if(!$resultado){          
            echo "El ejemplar numero " . ($_POST['libro_elegido']) . " se ha borrado con exito";
        }else{
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
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <p>libro</p>
        <select name="libro_elegido">
        <?php  
        
        $data = mostrarLibros();
        foreach ($data as $valores){
            echo '<option value="'.$valores['titulo'].'">'.$valores['titulo'].'</option>';
        }
        
                //$libros = mostrarLibros();
                //print_r( $libro);
                //echo "<select name='libro_elegido'>";
                //foreach($libros as $libro){
                    //echo "<option value='{$libro['titulo']}'>"."{$libro['titulo']} ({$libro['ano_edicion']})</opcion>";
                    //echo "<option value='0'>"."'{$libro['titulo']}'"."('{$libro['ano_edicion']}')"."</option>";
                    
                //}
                //echo "</select>";
            ?>
         </select>
            <input type="submit" value="Borrar" name="enviar">
        </form>
        <a href="librosDatosRaulPDO.php">Volver</a>          
    </body>
</html>
