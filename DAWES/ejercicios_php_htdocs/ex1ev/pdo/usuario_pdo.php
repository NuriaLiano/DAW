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
    <h1>Gestion de usuarios de Nuria</h1>
    <br/>
    <br/>
    <hr/>
    <fieldset>
        <form action="" method="post"></form>
            <table>
                <tr>
                <th>Usuario</th>
                <th>Nombre Real</th>
                    <?php
                        foreach (verUsuarios() as $usuario) {
                          echo "<tr>";
                          echo "<td><a href='modificarusuario.php'>". $usuario['nombre_usuario'] . "</a></td>";
                          echo "<td>" . $usuario['nombre_real'] . "</td>";
                          echo "</tr>";
                        };
                        ?>
            </form>
            <form action="" method="post">
            	<input type="submit" name="modificar" value="modificar">
            	<?php 
            	   if (isset($_POST['modificar'])) {
            	       
            	       echo "<form>";
            	       echo "label>Nombre Real: </label><input type='text' name='nombre_real' placeholder='introduce tu nombre_real>";
            	       echo "<br/>";
            	       echo "<hr/>";
            	       echo "<input type='submit' name='cambiar' value='cambiar'>";
            	       echo "</form>";
            	       
            	       if (isset($_POST['cambiar'])) {
            	          //modificarUsuario($_POST['nombre_real']);
            	           header("Location: modificarusuario.php");
            	       }
            	   }
            	
            	?>
            	
            </form>
            
    </fieldset>
    <br>
    <form action="" method="POST">
        <label>Usuario: </label><input type="text" name="usuario" placeholder="introduce tu usuario">
        <br/>
        <label>Contraseña: </label><input type="password" name="passwd">
        <br/>
        <hr>
        <input type="submit" name="insertar" value="insertar">
    </form>
    <hr/>
</body>
</html>

<?php 

    if (isset($_POST['insertar'])) {
        
    }



?>