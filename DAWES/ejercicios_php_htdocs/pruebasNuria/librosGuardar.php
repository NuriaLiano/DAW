<?php 
    require ('funcionesBaseDatos.php');
    


?>

<html>

	<head>
		<title>Nuria</title>
	</head>
	<body>
	
		<?php
		//guardarLibros();
        guardarLibrosPDO();
		
        ?>
	
		<hr/>
		<br/>
		<a href="libros.php">Volver a libros</a>
	</body>
</html>