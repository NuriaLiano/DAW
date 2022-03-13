<?php 

include_once 'ejer2.php';

//crear objeto coche
$cocheNuevo = new Coche("7766AAA", 50);

//imprimir iniciales
echo "<h3>Los valores iniciales: </h3>";
$cocheNuevo->mostrarInfo();

//acelerar coche
$cocheNuevo->acelera(20);
echo "<h3>Velocidad aumentada: </h3>";
$cocheNuevo->mostrarInfo();

//decelerar coche
$cocheNuevo->disminuye(40);
echo "<h3>Velocidad disminuida: </h3>";
$cocheNuevo->mostrarInfo();

?>