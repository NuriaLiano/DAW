<?php 
    //crear la session
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Base de datos</title>
</head>
<body>

	<form name="formulario" action="#" method="POST">
		<hr>
		<h1>Llegada</h1>
		<hr>
		<input type="submit" name="enviar" value="Llegada">
		<hr>
		<br>
		<input type="submit" name="borrar" value="Borrar Visitas">
		<hr/>
	</form>
		<?php
		
		//si existe la sesion contador la aumenta en 1 si no existe comienza en 1
		if( isset( $_SESSION['contador'] ) ) {
		    $_SESSION['contador'] += 1;
		}else {
		    $_SESSION['contador'] = 1;
		}
		//imprimir las veces que se ha visitado
		echo "<p>Has visitado esta página ".  $_SESSION['contador'] . " veces</p>";
		
		//almacenar la fecha de las visitas
		$fecha_ahora = new DateTime();
		
		//comprueba si la sesion esta vacia o no
		//si esta vacia muestra el mensaje y crea una sesion con la fecha de la visita
		//si la sesion tiene contenido agrega la fecha y hora actual e imprime el mensaje
		if(empty($_SESSION['ultimo_login'])) {
		    echo "<h1>Bienvenido</h1>";
		    echo "<p> No hay historial por que no has accedido antes</p>";
		    $_SESSION['ultimo_login'] = $fecha_ahora->format('d-m-Y H:i:s');
		}else if (isset($_SESSION['ultimo_login'])) {
		    
		    $_SESSION['ultimo_login'] = $fecha_ahora->format('d-m-Y H:i:s');
		    $sesion = array();
		    for ($i = 0; $i < $_SESSION['contador']; $i++) {
		        array_push($sesion, $_SESSION['ultimo_login']);   
		    }
		//print_r( "<p>La ultima visita a esta pagina es de ".$sesion."</p>" );
		echo "<p> La sesion ha sido: </p>";
		foreach ($sesion as $valor) {
		    echo $valor;
		    echo "<br/>";
		  }
		}
		
		if(isset($_POST['enviar'])){
		    include 'conexionBD.php';
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
    	if(isset($_POST['borrar'])){
    	    $_SESSION['ultimo_login'] = "";
    	    
    	    echo "<p>Se ha vaciado el array</p>";
    	    
    	}
		?>
    <hr/>
</body>
</html>