<?php 
    //include 'conexionBD.php';
    require ('funcionesBaseDatos.php');
    
    
    if (isset($_POST['guardarLibro'])) {
        
        guardarLibros();
        //header("Location: librosGuardar.php");
    }
?>

<html>

	<head>
		<title>Nuria</title>
	</head>
	<body>
		<form action="librosGuardar.php" method="post">
    		<label>Titulo: *</label><input type="text" name="introTitulo">
    		<hr>
    		<label>Ano de edicion: *</label><input type="number" name="introAno">
    		<hr>
    		<label>Precio: *</label><input type="number" name="introPrecio">
    		<hr>
    		<label>Fecha de adquisicion: * Introducir ANO-MES-DIA</label><input type="date" name= "introFecha">
    		<hr>
    		<input type="submit" value="Guardar datos del libro" name="guardarLibro">
		</form>
		<a href="librosDatos.php">Mostrar libros guardados</a>
		<br>
		<a href="librosBorrar.php">Borrar libros</a>
	</body>
</html>