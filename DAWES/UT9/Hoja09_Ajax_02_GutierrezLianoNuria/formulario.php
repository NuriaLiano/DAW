<?php
    include 'validar.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="validar.js"></script>
    <script type="text/javascript">
       /* $(document).ready(function(){

            $("#datos").submit(function(){
                if(validar()){
                    return true;  
                } else{
                    return false;
                }
                
            });
        });*/
    </script>
    <title></title>
    <style>
        .oculto{
            display: none;
        }
    </style>
</head>
<body>
    <!-- importante llarmar a formulario.php no usar la #-->
    <form id="datos" action="formulario.php" method="post">

		<label>Nombre:</label> <input type="text" name="nombre" id="nombre"><br>
		<span id='errorNombre' class='<?php if(!isset($_POST['enviar']) || validarNombre($_POST['nombre']))echo "oculto "; ?> error'>El nombre debe tener más de 3 caracteres.</span><br>
		
        
	    <label>DNI</label> <input type="text" name="dni" id="dni"><br> 
		<span id="errorDNI" for='dni' class='<?php if(!isset($_POST['enviar']) || validarDNI($_POST['dni']))echo "oculto "; ?>error'>El DNI es incorrecto</span> <br>
		
		<label>Contraseña</label>  <input type="text" name="pass1" id="pass1"><br>
		<label>Confirmar contraseña</label> <input type="text" name="pass2" id="pass2"><br> 
		<span id='errorPassword' class='<?php if(!isset($_POST['enviar']) || validarPasswords($_POST['pass1'], $_POST['pass2']))echo "oculto "; ?> error'>Mal las contraseñas.</span><br>

		<input name="enviar" type="submit" value="Enviar">

	</form>
</body>
</html>