<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 1</title>
	<link rel="stylesheet" media="screen" href="css/estilo.css" >
</head>
<body>
	<form class="formulario" action="" method="post" name="formulario">
	    <ul>
		    <li>
		         <h2>Conversor de monedas</h2>
		         <span class="mensaje_obligatorio">* Campo obligatorio</span>
		    </li>

		    <li>
		        <label for="cantidad">Cantidad:</label>
		        <input type="number" name="cantidad">
		    </li>

		    <li>
		        <button class="submit" type="submit" name="dol-eur">Dólares a euros</button>
		        <button class="submit" type="submit" name="eur-dol">Euros a dólares</button>
		    </li>

		</ul>
	</form>
	<?php 
	if( (isset($_POST['dol-eur']) || isset($_POST['eur-dol'])) && !empty($_POST['cantidad'])){
		require_once 'cliente.php';
		
		if(isset($_POST['dol-eur']))
			echo $_POST['cantidad']." dólares son ".  cambiarUnidades("USD", "EUR", "2021-01-21", $_POST['cantidad']) . " euros";
		else
			echo $_POST['cantidad']." euros son ".  cambiarUnidades("EUR", "USD", "2021-01-21", $_POST['cantidad']) . " dólares";
	} 
	?>
</body>
</html>