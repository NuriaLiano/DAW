<?php

include 'conexionBD.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

	<form name="formulario" action="#" method="POST">
		<hr>
		<h1>Registro de usuarios</h1>
		<hr>
		<label>Usuario  <input type="text" id="usuario" name="usuario"></label>
		<br/>
		<br/>
		<label>Password  <input type="password" id="password" name="password"></label>
		<br/>
		<br/>
		<br/>
		<input type="submit" name="enviar" value="Crear usuario">
		<hr>
	</form>
</body>
</html>
	<?php 
	   if(isset($_POST['enviar'])){
	       
    	   
	       //conexion a la bbdd
	       $conexion = getConnexion();
	       $comprobacion = true;
	       $conexion->begin_transaction();
	       
	       //INSERTAR CON CONSULTAS PREPARADAS
	       $stmt=$conexion->prepare("INSERT INTO usuarios (usuario, password) VALUES (?,?)");
	       // establecer parametros y ejecutar
	       $usuario = $_POST['usuario'];
	       $password = $_POST['password'];
	      
	       $clave=md5('$password');
	       echo 'Clave encriptada: '.$clave;
	     
	       $stmt->bind_param("ss", $usuario, $clave); //ss representa la cantidad de datos que queremos a�adir
	       
	       $stmt->execute();
	       echo "<p>SE HA REALIZADO CORRECTAMENTE</P>";
	       //cerrar
	       $stmt ->close();
	       
	       //comprobar que ha salido bien y mostrar mensaje
	       if ($comprobacion == true)
	       {
	           $conexion->commit();
	           print "<p>Los campos se han insertado correctamente.</p>";
	       }
	       else {
	           $conexion->rollback();
	           print "<p>NO SE HAN REALIZADO LOS CAMBIOS.</p>";
	       }
	       
	   }
	 ?>
	
	
	
	