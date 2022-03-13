
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title></title>
    <style>
        .oculto{
            display: none;
        }
    </style>
</head>
<body>
    <!-- importante llarmar a formulario.php no usar la #-->
    <form id="datos" action="ejer3.php" method="post">

		<label>Nombre:</label> <input type="text" name="nombre" id="nombre"><br>
	    <label>DNI</label> <input type="text" name="dni" id="dni"><br> 
		<label>Contraseña</label>  <input type="text" name="pass1" id="pass1"><br>
		<label>Confirmar contraseña</label> <input type="text" name="pass2" id="pass2"><br> 
	
		<input name="enviar" type="submit" value="Enviar" id="boton">

        <span id="errores"></span>

	</form>
</body>
<script type="text/javascript" src="jquery-3.6.0.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){
$("#boton").click(function(event){
    event.preventDefault();
    var datos = $('#datos input').serialize();
    $.ajax({
        type: "POST",
        url: "validar.php",
        dataType: "json",
        data:datos,
        success: function(data){
            if (data.errorNombre != null) {
                $("#errores").append(data.errorNombre);    
            }
            if(data.errorDNI != null){
                $("#errores").append(data.errorDNI);
            }
            if (data.errorPassword != null) {
                $("#errores").append(data.errorPassword);
            }
        }
    })
})
            }); 
    </script>
</html>