<?php 

    function validar_fecha_espanol($fecha){
        $valores = explode('/', $fecha);
        if(count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])){
            return "La fecha es correcta";
        }
        return "La fecha NO es correcta";
    }

?>