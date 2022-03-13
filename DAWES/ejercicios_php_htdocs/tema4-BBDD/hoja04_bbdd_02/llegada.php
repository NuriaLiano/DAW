<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Base de datos</title>
</head>
<body>

	<form name="formulario" action="" method="POST">
		<hr>
		<h1>Llegada</h1>
		<hr>
		<input type="submit" name="enviar" value="Llegada">
		<hr>
	</form>
		<?php
	    include 'conexionBD.php';
		if(isset($_POST['enviar'])){
    		$conexion = getConexion();
    		$comprobacion = true; 
    		$conexion->autocommit(false); 
    		
    		$sql = 'DELETE FROM pasajeros';
            if ($conexion->query($sql) != true) $comprobacion = false;
            $sql = 'UPDATE plazas SET reservada = 0 WHERE reservada <> 0';
            if ($conexion->query($sql) != true) $comprobacion = false;
            if ($comprobacion == true)
            {
            $conexion->commit();
            print "<p>Los cambios se han hecho correctamente.</p>";
            }
            else {
                $conexion->rollback();
            print "<p>NO SE HAN REALIZADO LOS CAMBIOS.</p>";
            }
    	}
		?>
    <hr/>
</body>
</html>