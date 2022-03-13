<?php 

    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuria Gutierrez</title>
</head>
<body>
    <h1>Gestion de aplicaciones de Nuria</h1>
    <br/>
    <br/>
    <hr/>
    <fieldset>
        <form action="" method="post"></form>
            <table>
                <tr>
                <th>Aplicacion</th>
                <th>Descripcion</th>
                    <?php
                        foreach (verAplicaciones() as $app) {
                          echo "<tr>";
                          echo "<td>". $app['nombre_aplicacion'] . "</td>";
                          echo "<td>" . $app['descripcion'] . "</td>";
                          echo "<td><input type='submit' name='borrar' value='borrar'></td>";
                          echo "</tr>";
                        };
                        
                        if (isset($_POST['borrar'])) {
                            if (isset($_POST['nombre_usuario']) && !empty($_POST['nombre_real'])) {
                                
                                $resultado = borrarAplicacion($app['nombre_aplicacion']);
                                
                            }
                        }
                        ?>
            </form>
            <form action="" method="post">
            	<input type="submit" name="modificar" value="modificar">
            	<?php 
            	   if (isset($_POST['modificar'])) {
            	       header("Location: modificarusuario.php");
            	       
            	       
            	       /*echo "<form>";
            	       echo "label>Nombre Real: </label><input type='text' name='nombre_real' placeholder='introduce tu nombre_real>";
            	       echo "<br/>";
            	       echo "<hr/>";
            	       echo "<input type='submit' name='cambiar' value='cambiar'>";
            	       echo "</form>";
            	       
            	       if (isset($_POST['cambiar'])) {
            	          //modificarUsuario($_POST['nombre_real']);
            	           
            	       }*/
            	   }
            	
            	?>
            	
            </form>
            
    </fieldset>
    <br>
    <form action="" method="POST">
        <label>Nombre: </label><input type="text" name="nombreApp" placeholder="introduce tu usuario">
        <br/>
        <label>Descripcion: </label><input type="password" name="desc">
        <br/>
        <hr>
        <input type="submit" name="insertar" value="insertar">
    </form>
    <hr/>
</body>
</html>

<?php 

    if (isset($_POST['insertar'])) {
        registrarAplicacion($_POST['nombreApp'], $_POST['desc']);
    }else{
        
    }



?>