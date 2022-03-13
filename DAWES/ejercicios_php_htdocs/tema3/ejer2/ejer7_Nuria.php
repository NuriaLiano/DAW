<?php

/*
 * 20 digitos total
 * 4 primeros de entidad financiera
 * cuatro siguientes (del 5 al 8) de codigo de oficina
 * dos digitos codigo de control
 * ultimos 10 digitos numero de cuenta
 */
    function validar_cuenta($cuenta){
        for ($i = 0; $i < count($cuenta); $i ++) {
            $codigos = explode("-", $cuenta);
            echo $codigos[1];
        }
    }

?>