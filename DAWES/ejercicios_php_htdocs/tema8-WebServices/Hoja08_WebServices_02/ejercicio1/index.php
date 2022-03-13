<html>
<head>
<title></title>
</head>
<body>
<?php
require_once 'cliente.php';
?>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

				<h1>Calcular letra del DNI</h1>
			<hr/>
			<label>Introduce los numeros del DNI: </label><input type='text' name='dni' maxlength='8'/>
			<br/><br/> 
			<input type="submit" value="Mostrar DNI" name="enviar">
		    <hr/>
			<?php
			 if (isset($_POST["enviar"])) {
			   $dni = $_POST["dni"];
			   //cambiarUnidades($dni);
			   echo "El dni ".$dni." tendra la letra:".cambiarUnidades($dni);
			 }   
        ?>   
	</form>
	</body>
</html>