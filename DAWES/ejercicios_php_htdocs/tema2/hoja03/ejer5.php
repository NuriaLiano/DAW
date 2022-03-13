<?php
$fecha = date('Y-m-j H:i:s'); // inicializar fecha

$fecha_suma = strtotime('+1 hour', strtotime($fecha));
$fecha_suma = strtotime('+10 minute', $fecha_suma); // utilizo "nuevafecha"
$fecha_suma = strtotime('+10 second', $fecha_suma); // utilizo "nuevafecha"
$fecha_suma = date('Y-m-j H:i:s', $fecha_suma);

echo "$fecha (Fecha)";
echo "<br/>";
echo "$fecha_suma (SUMA)";

?>