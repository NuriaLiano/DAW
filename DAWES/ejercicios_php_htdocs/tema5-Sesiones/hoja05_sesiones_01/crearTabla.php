<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 Base de datos</title>
</head>
<body>

	<form name="formulario" action="" method="POST">
		<hr>
		<h1>Crear tabla</h1>
		<hr>
		<input type="submit" name="enviar" value="Crear">
		<br/>
		<hr/>
		<br>
		
		<hr>
	</form>
		<?php
	    include_once 'conexionBD.php';

	  //PARA EL BOTON CREAR
		if(isset($_POST['enviar'])){
    		$conexion = getConexion();
    		$comprobacion = true; 
    		$conexion->autocommit(false); 
    		
    		//crear tabla
            $sql = 'CREATE TABLE IF NOT EXISTS usuarios ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, usuario varchar(20) NOT NULL, password varchar(20) NOT NULL)';
            if ($conexion->query($sql) != true) $comprobacion = false;
           
            
            //comprobar que ha salido bien y mostrar mensaje
            if ($comprobacion == true)
            {
            $conexion->commit();
            print "<p>La tabla USUARIOS se ha creado correctamente.</p>";
            }
            else {
                $conexion->rollback();
            print "<p>NO SE HAN REALIZADO LOS CAMBIOS.</p>";
            }
            
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
    <hr/>
</body>
</html>