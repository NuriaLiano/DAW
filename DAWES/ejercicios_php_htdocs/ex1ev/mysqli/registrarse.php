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
    <h1>Aplicacion de permisos de Nuria - Registro</h1>
    <br/>
    <br/>
    <hr/>
    <form action="" method="POST">
        <label>Usuario: </label><input type="text" name="usuario" placeholder="introduce tu usuario">
        <br/>
        <label>Contraseña: </label><input type="password" name="passwd">
        <br/>
        <label>Confirma contraseña: </label><input type="passwordConfirmar" name="passwdConfirm">
        <br/>
        <hr>
        <input type="submit" name="registrarse" value="registrarse">
    </form>
    <a href="index.php">Volver a index</a>
</body>
</html>

<?php 
	   
	   if(isset($_POST['registrarse'])){
	       
	       //verificar si las contraseñas son iguales
	       if ($_POST['passwd'] != $_POST['passwdConfirm']) {
	           echo "<script>alert('Las contraseñas no coinciden')</script>";
	       }else{
	           registrarUsuario($_POST['usuario'], $_POST['passwd']);
	       }
	   }
	 ?>