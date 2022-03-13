<?php
    include_once 'DB.class.php';
    include_once 'coche.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Nuria</title>
</head>
<body>
    <h2>Registro de coches en el taller </h2>
    
        <?php
            
            $bbdd = new DB("localhost","root","");
                
            ?>
                 <form class="coche" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                   
               

				<label>Color:</label> <input name="color" type="text" class="color"></input>
				<br>
				<label>Marca:</label> <input name="marca" type="text" class="marca"></input>
				<br>
				<label>Potencia:</label> <input name="potencia" type="text" class="potencia"></input>
				<br>
				<label>Matricula:</label><input name="matricula" type="text" class="matricula"></input>
				<br>
                <label>Numpuertas:</label><input name="numpuertas" type="text" class="numpuertas"></input>
				<br>
                <label>Tamano maletero:</label><input name="maletero" type="text" class="maletero"></input>
				<br>
                <label>Clase:</label><input name="clase" type="text" class="clase"></input>
				<br>
 				<br>
				
				
				<input name="insertar" type="submit" class="insertar_moto" value= "Insertar"></input>
        

    </form>
    <?php
            
            if (isset($_POST["insertar"])) {
                
                $col = $_POST["color"];
                $marca = $_POST["marca"];
                $pot = $_POST["potencia"];
                $matri = $_POST["matricula"];
                $numpu = $_POST["numpuertas"];
                $male = $_POST["maletero"];
                $clase = $_POST["clase"];
                
                
                $bbdd->insertarCoche($col,$marca,$pot, $clase,$matri,$numpu, $male);
            }
            ?>











</body>
</html>