<?php
include "conexion.php";
?>
<!DOCTYPE html>
<!-- Autor: Raul Lavin -->
<html>
	<head>
		<title>Llegada</title>
	</head>
	<body>
		<form name="gestion" action="" method="POST">
		    <hr>
				<h2>Llegada</h2>
				<hr>
				<input type="submit" name="enviar" value="Llegada">
				<hr>
		</form>
		<?php
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
            print "<p>No se han podido hacer los cambios.</p>";
            }
    	}
		?>
	</body>
</html>
