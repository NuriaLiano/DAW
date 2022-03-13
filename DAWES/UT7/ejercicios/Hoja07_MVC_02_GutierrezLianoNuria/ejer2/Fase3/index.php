<?php

require_once ('modelo.php');

global $productos;

$bbdd = new BD("localhost","dwes_04_tienda","root","");

$productos = $bbdd->obtener_productos();

require('vista.php');  

?>