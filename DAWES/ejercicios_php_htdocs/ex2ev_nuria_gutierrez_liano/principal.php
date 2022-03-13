<?php
    include 'DB.class.php';
    include 'coche.php';
    include 'moto.php';
    include 'taller.php';
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
    <?php
                
                $bbdd= new DB("127.0.0.1" , "root", "");
                
                $lista = $bbdd->getVehiculos();
                $html = "<table class='table' style=\"border: 1px solid black\">";
                $html .="<th>Usuario</th>";
                $html .="<th>Comentario</th>";
                foreach ($lista as $codigo => $vehiculo) {
    
                    $pro = new Vehiculo($vehiculo["color"],$vehiculo["marca"],$vehiculo["potencia"],$vehiculo["clase"],$vehiculo["matricula"]);
                    $pro->toString();
                    //$html .= "<tr><td><h3>{$vehiculo["color"]}</h3></td><td><h3>{$vehiculo["marca"]}</h3></td></tr>";
                    
                }
                    $html .= "</table>";
                    
                    echo $html;
                    ?>
                    <input name="img" type="file" class="precio"></input>
      


    
    
    
    
    ?>
</body>
</html>