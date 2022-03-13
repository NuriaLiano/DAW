<html>
<head>
<title></title>
</head>
<body>
<?php
require_once 'cliente.php';
?>
	<fieldset>
		<legend>Calcular DNI</legend>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

			<input type='text' name='numeros' maxlength="8" placeholder="introduce solo los numeros del DNI">
			<br/><br/> 

		    <input type='text' name='letras' pattern="[A-Z]" maxlength="1" placeholder="introduce la letra">
			<br/><br/> 
			<input type="submit" value="Mostrar DNI" name="enviar">
		    <hr/>
			<?php
			 if (isset($_POST["enviar"])) {
			   $numeros = $_POST["numeros"];
			   $letras = $_POST["letras"];
			   echo "El dni ".$numeros.$letras. " es: ".cambiarUnidades($numeros, $letras);
			   
			 }   
        ?>   
	</form>
	</fieldset>
	</body>
</html>