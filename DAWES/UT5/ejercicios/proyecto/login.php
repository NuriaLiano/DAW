<?php
include 'conexionBD.php';

?>

<!DOCTYPE html>
<!-- Autor: isabel y Nuria-->
<html>
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/login.css">
		<title>Login</title>
	</head>
	<body>
        <div class="login">
            <div class="login-caja">
                <form name="reservar" action="" method="POST">
                <div class="login-titulo">
                    <h2>Login de usuarios</h2>
                </div>
                <div class="login-form">
                    <div class="login-inputs">
                        <input type="text" class="login-field" id="buscador" name="nombre" placeholder="introduce usuario" require>
                        <label class="login-field-icon fui-user" for="login-name"></label>    
                    </div>
                    <div class="login-inputs">
                        <input type="password" class="login-field" id="buscador" name="password" placeholder="introduce password" require>
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    <input type="submit" name="enviar" value="Login" class="btn">
                </div>
                </form>
            </div>
        </div>
		
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
                // Si las credenciales no son v�lidas, se vuelven a pedir
                $error = "Usuario o contrasena no válidos!";
            }
            unset($resultado);
        }
        unset($conexion);
    }
    ?>
		</body>
		</html>

				
