<?php
ini_set("display_errors",true);

include_once("../bd/BD.php");
include_once("../modelos/Jugador.php");

//esto que es https://www.php.net/manual/es/function.file-get-contents.php
$entrada=file_get_contents('php://input');

//es la manera de transmitir el contenido de un fichero a una cadena.
$datos = json_decode($entrada, true);

//saca el valor de criterio de los datos
$criterio=$datos["criterio"];

//almacena en un listdo todos los juagdores segun lo introducio en el input que se pasa como datos["criterio"]
$listado=BD::mostrarJugadores($criterio);

//convierte el listado en un json
$json= json_encode($listado);

echo $json;