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
			<label>Introduce los numeros del DNI: </label><input type='text' name='dni_num' maxlength="8">
			<br/><br/> 
			<label>Introduce la letra del DNI: </label><input type='text' name='dni_let' pattern="[A-Z]" maxlength="1">
			<br/><br/> 
			<input type="submit" value="Mostrar DNI" name="enviar">
		    <hr/>
			<?php
			 if (isset($_POST["enviar"])) {
			   $dni_num = $_POST["dni_num"];
			   $dni_let = $_POST["dni_let"];
			   //cambiarUnidades($dni);
			   echo "El dni ".$dni_num."-".$dni_let. " es: ".cambiarUnidades($dni_num, $dni_let);
			   
			 }   
        ?>   
	</form>
	</body>
</html>