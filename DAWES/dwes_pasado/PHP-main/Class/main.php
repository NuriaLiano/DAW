<?php

require_once "Producto.php";
require_once "BaseDatos.php";
$p=new Producto(1, "Xiaomi mi 9", 320, 2019, 3200);
echo $p->mostrar();
echo "<br>";
echo BaseDatos::USUARIO;
?>