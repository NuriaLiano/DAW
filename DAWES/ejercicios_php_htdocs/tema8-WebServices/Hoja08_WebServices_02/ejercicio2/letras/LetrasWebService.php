<?php

class LetrasWebService{
      
    /**
     * Funcion de comprobar letra y numero
     * @param  float $dni_num   DNI
     * @param  string $dni_let   Letra
     * @return float           Cambio
     */
    public function calculaLetra($dni_num, $dni_let){    
        if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $dni_num%23, 1) == $dni_let && strlen($dni_let) == 1 && strlen ($dni_num) == 8 ){
            return "valido";
        }else{
            return "no valido";
        }
}

}

?>