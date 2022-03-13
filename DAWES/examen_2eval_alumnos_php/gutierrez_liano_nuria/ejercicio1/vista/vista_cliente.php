<?php 
    global $funcion;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente - Nuria</title>
</head>
<body>
    

    
    <table class='table' style=\"border: 1px solid black; width: 300px;\"> <tr><th>Telefonos</th><th>Peso</th></tr>";

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

    <?
     

</body>
</html>