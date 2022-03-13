<html>
<head>
<title>Ejercicio 8</title>

</head>

<body>
	
	<?php
require_once 'funcionesPDO.php';
?>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

		<fieldset>

			<legend>
				<h1>Buscador de jugadores</h1>
			</legend>

			<label>Elige un equipo de la NBA:</label> <select name="select">
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
			
			<input type="submit" value="Actualizar" name="actualizar">
			
			<?php

if (isset($_POST["buscar"])) {

    $html = "<table class='table' style=\"border: 1px solid black; width: 300px;\"> <tr><th>Jugadores</th><th>Peso</th></tr>";
    $equipoSelect = $_POST["select"];

    $lista = jugadoresPorEquipoPDO($equipoSelect);

    for ($i = 0; $i < sizeof($lista); $i ++) {

        $id = $lista[$i]->codigo;
        $nombre = $lista[$i]->nombre;
        $pesoJ = $lista[$i]->peso;
        $html .= "<tr><td>" . $nombre . "</td>";
        $html .= "<td><input type='text' name='pesos[]' value='$pesoJ'> <input name='id[]' type='hidden' value='$id'></td></tr>";
    }
    $html .= "</table>";

    echo $html;
}
			
			if (isset($_POST["actualizar"])) {
			    
			    $listaPesos = $_POST["pesos"];
			    $listaId = $_POST["id"];
			    
			    for($i=0;$i<sizeof($listaPesos);$i++){
			         
			        modificarPesoJugadoresPDO($listaPesos[$i],$listaId[$i]);
			        
			    }
			    
                echo "Pincha en buscar para ver la actualización";
			     
			}
			?>

		</fieldset>

	</form>
	
	
	
		  

	</body>
</html>