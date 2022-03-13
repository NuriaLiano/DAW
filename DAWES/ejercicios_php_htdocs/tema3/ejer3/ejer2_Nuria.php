<?php 

$importe=1253.99;

echo "<p>El cambio de la cantidad ".$importe." es:</p>";

// indicamos todas las monedas posibles
$monedas=array(500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.20, 0.10, 0.05, 0.02, 0.01);

// creamos un array con la misma cantidad de monedas
// Este array contendra las monedas a devolver
$cambio=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

// Recorremos todas las monedas
for($i=0; $i<count($monedas); $i++)
{
    // Si el importe actual, es superior a la moneda
    if($importe>=$monedas[$i])
    {
        
        // obtenemos cantidad de monedas
        $cambio[$i]=floor($importe/$monedas[$i]);
        
        // actualizamos el valor del importe que nos queda por didivir
        $importe=$importe-($cambio[$i]*$monedas[$i]);
    }
}

// Bucle para mostrar el resultado
for($i=0; $i<count($monedas); $i++)
{
    if($cambio[$i]>0)
    {
        if($monedas[$i]>=5)
            echo "Hay: ".$cambio[$i]." billetes de: ".$monedas[$i]." &euro;<br>";
            else
                echo "Hay: ".$cambio[$i]." monedas de: ".$monedas[$i]." &euro;<br>";
    }
}

?>