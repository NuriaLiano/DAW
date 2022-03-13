
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
                //anula el efecto del clic, no recarga la pagina OBLIGATORIO PONERLO
                event.preventDefault();
                //transforma el string del input en un objeto
                var datos = $('#datos input').serialize();
                $.ajax({
                    //envio metodo POST
                    type: "POST",
                    //en donde se realiza la peticion
                    url: "validar.php",
                    //establece el tipo de info que espera recibir como respuesta del server
                    dataType: "json",
                    //informacion que se envia al server
                    data:datos,
                    //si peticion es satisfactoria ejecuta la funcion
                    //pasa los datos en forma de objeto json 
                    success: function(data){
                        //evalua si la funcion error nombre no esta vacia
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