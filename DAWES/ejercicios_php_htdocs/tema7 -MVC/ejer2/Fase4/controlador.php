<?php
require 'modelo/BaseDatos.php';

require 'modelo/modelo.php';

global $productos;

$productos = obtener_productos();

include 'vista/plantilla/vista.php';  

?>