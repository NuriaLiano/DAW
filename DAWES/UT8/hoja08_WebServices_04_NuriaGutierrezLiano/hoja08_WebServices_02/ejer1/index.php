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
			</label><input type='text' name='dni' maxlength='8' placeholder="introduce tu dni"/>
			<br/><br/> 
			<input type="submit" value="Ver Letra" name="ver">
		    <hr/>
			<?php
			 if (isset($_POST["ver"])) {
			   $dni = $_POST["dni"];
			   //echo "<script>alert('Le corresponde la letra '".cambiarUnidades($dni).");</script>";
			   echo "la letra es: ".cambiarUnidades($dni);
			   
			 }   
        ?>   
	</form>
	</fieldset>
	</body>
</html>