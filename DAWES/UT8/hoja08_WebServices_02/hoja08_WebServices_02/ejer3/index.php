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
			<input type='text' name='dni' maxlength="8" placeholder="introduce solo los numeros del DNI">
			<br/><br/> 
			<input type="submit" value="boton1" name="btn1">
			<br/><br/> 
			<?php
			if (isset($_POST["btn1"])) {
			    $dni = $_POST["dni"];
				//echo $dni;
			    echo "El dni ".$dni." tiene la letra:".calculaLet($dni);
			    
			}   
			?>
			<hr/>
			<input type='text' name='numeros' maxlength="8" placeholder="introduce solo los numeros del DNI">
			<br/><br/> 
			<input type='text' name='letras' pattern="[A-Z]" maxlength="1" placeholder="introduce la letra">
			<br/><br/> 
			<input type="submit" value="btn2" name="btn2">
			<br/><br/>  
		    <?php
			 if (isset($_POST["btn2"])) {
			   $numeros = $_POST["numeros"];
			   $letras = $_POST["letras"];
			   echo "El dni ".$numeros."-".$letras. " es: ".compruebaNumLet($numeros, $letras);
			   
			 }   
        ?>   
		    <hr/>
	</form>
			</fieldset>
	</body>
</html>