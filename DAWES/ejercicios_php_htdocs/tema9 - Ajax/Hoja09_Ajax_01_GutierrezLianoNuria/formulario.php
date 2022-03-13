<?php
    include 'validar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .oculto{
            visibility: hidden;
            display: none;
        }
    </style>
</head>
<body>
    <!-- importante llamar a formulario.php no usar la # en el action-->
    <form action="formulario.php" method="POST">
        <label>Nombre:</label> <input type="text" name="nombre" id="nombre">
        <span id='errorNombre' for='nombre' class='<?php if(!isset($_POST['enviar']) || validarNombre($_POST['nombre'])) echo "oculto "; ?>error'>El nombre debe tener más de 3 caracteres.</span>
        <br>
        <label>DNI:</label><input type="text" name="dni" id="dni">
        <span id='errorDNI' for='dni' class='<?php if(!isset($_POST['enviar']) || validarDNI($_POST['dni'])) echo "oculto "; ?>error'>El DNI es incorrecto</span>
        <br>
        <label>Constrasena:</label><input type="text" name="password1" id="password1">
        <label>Confirmar contrasena:</label><input type="text" name="password2" id="password2">
        <span id='errorPassword' for='password' class='<?php if(!isset($_POST['enviar']) || validarPasswords($_POST['password1'], $_POST['password2'])) echo "oculto "; ?>error'>Debe ser mayor de 5 caracteres o no coinciden.</span>
        <br>
        <input type="submit" value="Enviar" id="enviar" name="enviar">
    </form>




</body>
</html>