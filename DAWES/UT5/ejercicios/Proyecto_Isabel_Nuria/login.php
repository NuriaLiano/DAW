<?php
include 'conexionBD.php';

?>

<!DOCTYPE html>
<!-- Autor: isabel y Nuria-->
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<form name="reservar" action="" method="POST">
				<h2>Login de usuarios</h2>
				<hr>
				<label>Usuario:</label>
				<input type="text" id="buscador" name="nombre" placeholder="introduce usuario" require>
				<br><br>
				<label>Password:</label>
				<input type="password" id="buscador" name="password" placeholder="introduce password" require>
				<br><br>
				<br><br>
				<input type="submit" name="enviar" value="Login">
				<hr>
		</form>
				<?php
    if (isset($_POST['enviar'])) {
        $conexion = getConnexion();
        $todoOk = true;

        $usuario = $_POST['nombre'];
        $password = $_POST['password'];

        $sql = "SELECT usuario FROM usuarios WHERE usuario='$usuario' AND  password=md5('$password')";
        if ($resultado = $conexion->query($sql)) {
            if(isset($resultado)){
                  echo "eres un genio";
                  session_start();
                  $_SESSION['usuario'] = $usuario;
                  header("Location: productos.php"); 
            } else {
                // Si las credenciales no son válidas, se vuelven a pedir
                $error = "Usuario o contraseña no válidos!";
            }
            unset($resultado);
        }
        unset($conexion);
    }
    ?>
		</body>
		</html>

				
