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
			<label>Introduce los numeros del DNI: </label><input type='text' name='dni' maxlength="8">
			<br/><br/> 
			<input type="submit" value="Funcion 1" name="enviar1">
			<br/><br/> 
			<?php
			if (isset($_POST["enviar1"])) {
			    $dni = $_POST["dni"];
			    //cambiarUnidades($dni);
			    echo "El dni ".$dni." tendra la letra:".calculaLet($dni);
			    
			}   
			?>
			<hr/>
			<label>Introduce los numeros del DNI: </label><input type='text' name='dni_num' maxlength="8">
			<br/><br/> 
			<label>Introduce la letra del DNI: </label><input type='text' name='dni_let' pattern="[A-Z]" maxlength="1">
			<br/><br/> 
			<input type="submit" value="Funcion 2" name="enviar2">
			<br/><br/>  
		    <?php
			 if (isset($_POST["enviar2"])) {
			   $dni_num = $_POST["dni_num"];
			   $dni_let = $_POST["dni_let"];
			   //cambiarUnidades($dni);
			   echo "El dni ".$dni_num."-".$dni_let. " es: ".compruebaNumLet($dni_num, $dni_let);
			   
			 }   
        ?>   
		    <hr/>
	</form>
	</body>
</html>