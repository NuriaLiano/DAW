
<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>numero de pacientes</title>
</head>
<body>
	<form action='#' method='POST'>
        <h1>Introduce el numero de pacientes</h1>
        <label>N pacientes: </label>
        <input type='text' id='numeros' name='numeros' placeholder='numeros'>
        <input type='submit' value='Ver medicos de familia' name='vermedicosfamilia'>
        <input type='submit' value='Ver todo' name='vertodo'>
        <input type='submit' value='Ver medicos de tarde y edad' name='vertardeedad'>
    </form>
</body>
</html>
<?php 

include_once 'ejer3.php';


//crear array
$arrayObjetos = [];


//objeto familia
$familia1 = new Familia ("nuria", 24, "tarde", 2);
$familia2 = new Familia ("isabel", 60, "tarde", 3);
$familia3 = new Familia ("nieves", 32, "mañana", 2);

//objeto urgencia
$urgencia1 = new Urgencia ("raul", 24, "mañana", "uci");
$urgencia2 = new Urgencia ("fran", 92, "mañana", "intensivos");
$urgencia3 = new Urgencia ("javier", 75, "tarde", "recepcion");

//añadir los objetos a un array
array_push($arrayObjetos, $familia1, $familia2, $familia3, $urgencia1, $urgencia2, $urgencia3);

/*$arrayObjetos[0] = $familia1;
$arrayObjetos[1] = $familia2;
$arrayObjetos[2] = $familia3;
$arrayObjetos[3] = $urgencia1;
$arrayObjetos[4] = $urgencia2;
$arrayObjetos[5] = $urgencia3;*/

if (isset($_POST["vermedicosfamilia"])) {
    echo "<h2>Medicos de familia con el mismo numero de pacientes que el introducido</h2>";
    //recorrer el array
    for ($i = 0; $i < sizeof($arrayObjetos); $i++) {
        //comprobar si son instancias de familia
        if ($arrayObjetos[$i]instanceof Familia) {
            //mostrar medicos de familia que tengan pacientes igual o sup que lo introducido
            if ($arrayObjetos[$i]->getPacientes() >= $_POST["numeros"]) {
                $arrayObjetos[$i]->mostrar();
            }
        }

    }
}

if (isset($_POST["vertodo"])) {
    echo "<h2>Todos los medicos</h2>";
    //recorrer el array
    for ($i = 0; $i < sizeof($arrayObjetos); $i++) {
        $arrayObjetos[$i]->mostrar();
        
    }
}

if (isset($_POST["vertardeedad"])) {
    echo "<h2>Medicos de urgencias que esten de tarde y tengan mas de 60 anios</h2>";
    //recorrer el array
    for ($i = 0; $i < sizeof($arrayObjetos); $i++) {
        //comprobar si son instancias de familia
        if ($arrayObjetos[$i]instanceof Urgencia) {
            //mostrar medicos de familia que tengan pacientes igual o sup que lo introducido
            if (($arrayObjetos[$i]->getTurno() == "tarde")&&($arrayObjetos[$i]->getEdad() > 60)) {
                $arrayObjetos[$i]->mostrar();
            }
        }
        
    }
}




?>