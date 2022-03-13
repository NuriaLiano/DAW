<?php 

    include 'funcionesBaseDatos.php';
    
    if (isset($POST['enviar'])) {
        if (isset($_POST['libro_borrar'])) {
            //$precioFin = verPreciosBorrado($_POST['libro_borrar']);
            $resultado = borrarLibros($_POST['libro_borrar']);
            
            if (!$resultado) {
                echo " se ha borrado con exito";
            }else{
                echo "El libro no se ha podido borrar";
            }
        }
    }
    
?>

<html>

	<head>
		<title>Nuria</title>
	</head>
	<body>
		<h2>Libros</h2>
		<form action='' method='post'>
    		<p>libro
    			<?php
    			echo "<select name='libro_borrar'>";
    			foreach (verLibros() as $libro){
    			    echo "<option value=' " . $libro['id'] . "'>" . $libro['titulo'] . " (" . $libro['ano_edicion'] . ")" . "</option>";
    			}
    			echo "</select>";
    			
    			?>
    		</p>	
			<input type="submit" value="Borrar libro" name="enviar">
		</form>
		
		<a href="libros.php">Volver a libros</a>
	</body>
</html>