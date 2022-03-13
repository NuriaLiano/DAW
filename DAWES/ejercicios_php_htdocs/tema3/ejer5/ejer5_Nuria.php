<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input[type=submit] {
            margin-top: 1em;
            color: white;
            background-color: green;
            font-weight: bold;
            padding: 0.5em;
            margin-bottom: 2em;
            margin-left: 12em;
        }

        label {
        	margin-right: 5em;
        }

        .resultado {
            height: 5em;
            line-height: 5em;
            color: white;
            font-size: large;
            font-weight: bold;
            padding-left: 1em;
            width: 100%;
            background-color: mediumblue;
        }

        .caja hr {
        	color: lightgray;
        }
    </style>
    <title>ejer5</title>
</head>
<body>
	<h1>Suma de cantidades</h1>
	<hr/>

	<?php
		$numinp = 10;	
	?>

	<form action="ejer5_Nuria.php" method="POST">
		<?php
			for ($contador = 1; $contador <= $numinp; $contador++) {
				$valor_label = sprintf("Cantidad %d:", $contador);
		?>
		<div class="caja">
			<label for="numeros[]"><?= $valor_label ?></label>
			<input type="number" name="numeros[]" min="1" max="<?= $numinp ?>" step="1" value="<?= $contador ?>" required />
			<hr/>
		</div>
		<?php
			}
		?>
		<input type="submit" value="Sumar">
	</form>
	<?php
		if (!empty($_POST)) {
			$valores = $_POST["numeros"];
			$suma = array_sum($valores);
	?>
	<div class="resultado">
    	La suma es <?= $suma ?>
	</div>
	<?php
		}
	?>
</body>
</html>