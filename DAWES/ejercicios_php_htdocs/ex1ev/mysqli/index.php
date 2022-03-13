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
    <h1>Bienvenido a la aplicacion de gestion de permisos de Nuria</h1>
    <br/>
    <br/>
    <hr/>
    <form action="" method="POST">
        <label>Usuario: </label><input type="text" name="usuario" placeholder="introduce tu usuario">
        <br/>
        <label>Contraseña: </label><input type="password" name="passwd">
        <br/>
        <hr>
        <input type="submit" name="login" value="login">
    </form>
    <a href="registrarse.php">Registrarse</a>
</body>
</html>

<?php 
    //comprobar usuario
    
    if (isset($_POST['login'])) {
        $usuario = $_POST['usuario'];
        $password = $_POST['passwd'];
        if (login($usuario, $password) == true) {
        // Creamos la sesion y llevamos al usuario a la pagina
        session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["password"] = $password;
        header("Location: principal.php");
    } else {
        // Si las credenciales no son validas, se vuelven a pedir
        
        echo "<script>alert('Usuario o contrasena no validos!');</script>";
        exit();
    }
    }
    
    



?>


