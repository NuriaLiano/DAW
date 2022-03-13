<?php

require_once "CuentaAhorro.php";
require_once "CuentaCorriente.php";

$c=new Cuenta(1109, "Joseba", 20000);
$c->ingreso(1000);
$c->reintegro(2000);
echo $c->mostrar();