<html>
<head>
<title>Ejercicio 8</title>

</head>

<body>
	
	<?php
        require_once 'bbdd.php';
        require_once 'cliente.php';
    ?>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

		<fieldset>

			<legend>
				<h1>Buscador de jugadores</h1>
			</legend>

			<label>Elige un equipo de la NBA:</label>
			
			<select name="formas">
				<option>ES</option>
				<option>EN</option>
			</select>
			
			<select name="select">
				<?php
				$lista = getEquiposPDO();
    for ($i = 0; $i < sizeof($lista); $i ++) {

        if ($_POST["select"] == $lista[$i]->nombre) {
            echo "<option selected=true>" . $lista[$i]->nombre . "</option>";
        } else {
            echo "<option>" . $lista[$i]->nombre . "</option>";
        }
    }
    ?>
			</select> 
			<input type="submit" value="Buscar" name="buscar">
		
			
			<?php

if (isset($_POST["buscar"])) {

    $html = "<table class='table' style=\"border: 1px solid black; width: 300px;\"> <tr><th>Jugadores</th><th>Peso</th></tr>";
    
    $equipoSelect = $_POST["select"];
        
    $tipoPeso = $_POST["formas"];
    
    $lista = jugadoresPorEquipoPDO($equipoSelect);

    for ($i = 0; $i < sizeof($lista); $i ++) {

        $id = $lista[$i]->codigo;
        $nombre = $lista[$i]->nombre;
        $pesoJ = $lista[$i]->peso;
        
        $nuevoPeso = cambiarUnidades($tipoPeso, $pesoJ);
        
        $html .= "<tr><td>" . $nombre . "</td>";
        $html .= "<td><input type='text' name='pesos[]' value='$nuevoPeso'> <input name='id[]' type='hidden' value='$id'></td></tr>";
    }
    $html .= "</table>";

    echo $html;
}
			
			
			?>

		</fieldset>

	</form>
	
	
	
		  

	</body>
</html>