<?php

require_once "iEncendible.php";
require_once "Bombilla.php";
require_once "Coche.php";

function enciende_algo(iEncendible $algo)
{
    $algo->encenderse();
}
$coche1=new Coche();
$coche1->repostar(50);
$bombilla1=new Bombilla(0);
enciende_algo($coche1);
enciende_algo($bombilla1);