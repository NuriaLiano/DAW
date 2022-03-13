<?php

require_once "Familia.php";
require_once "Ugencia.php";
$medicos=array();
$medicos[]=new Familia("joseba", 19, "tarde",9);
$medicos[]=new Ugencia("dani", 80, "tarde",69);

function getMedicos($medicos){
    echo "Los medicos:";
    foreach ($medicos as $medico) {
        echo $medico;
    }
}

getMedicos($medicos);