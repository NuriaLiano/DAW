<?php
include "conexion.php";
?>
<!DOCTYPE html>
<!-- Autor: Raul Lavin -->
<html>
	<head>
		<title>Reservar</title>
	</head>
	<body>
		<form name="reservar" action="" method="POST">
				<h2>Reserva de asiento</h2>
				<hr>
				<label>Nombre:</label>
				<input type="text" id="buscador" name="nombre" placeholder="Su nombre" require>
				<br><br>
				<label>DNI:</label>
				<input type="text" id="buscador" name="dni" placeholder="Su DNI" require>
				<br><br>
				<label>Asiento:</label>
				
				
				
				<select name="asiento">
				<?php
				function getAsiento(){
				    $conexion = getConexion();
				    $sql = "SELECT numero,precio FROM plazas WHERE reservada=0";
				    $resultado=$conexion->query($sql);
				    if($resultado){
				        while (($plaza = $resultado->fetch_array()) !=null) {
				            $plazas[]=$plaza;
				        }
				        $resultado->close();
				    }
				    $conexion->close();
				    return $plazas;
				}
				$plazas=getAsiento();
				
				foreach($plazas as $plaza){
				    echo "<option value='{$plaza['numero']}'";
				    echo ">{$plaza['numero']} ({$plaza['precio']})</opcion>";
				}
				?>
				</select>
				<br><br>
				<input type="submit" name="enviar" value="Reservar">
				<hr>
		</form>
				<?php
        if(isset($_POST['enviar'])){
            $conexion = getConexion();
            $todoOk = true;
            $nombre = $_POST['nombre'];
            $dni = $_POST['dni'];
            $plaza = $_POST['asiento'];
    
            $conexion->autocommit(false);
            $sql = "INSERT INTO pasajeros (nombre, dni, sexo) VALUES (' $nombre ', ' $dni ' , '-' )";
            if ($conexion->query($sql) != true) $todoOk = false;
                $sql = "UPDATE plazas SET reservada = 1 WHERE numero = ' $plaza ' ";
                 if ($conexion->query($sql) != true) $todoOk = false;
            if ($todoOk == true){
                $conexion->commit();
                print "<p>Se ha reservado el asiento $plaza</p>";
            }else{
                $conexion->rollback();
                print "<p>No se han podido realizar los cambios.</p>";
                }
            }
?>
		</body>
		</html>

				
		

