<?php
class OperacionesConDNI {
    
    /**
     * Funcion de calcular letra
     * @param  float $dni   DNI
     * @return float           Cambio
     */
    public function calculaLetra($dni){
        $valor= (int) ($dni / 23);
        $valor *= 23;
        $valor= $dni - $valor;
        $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
        $letraNif= substr ($letras, $valor, 1);
        return $letraNif;
        
    }
     
    /**
     * Funcion de cambiar pesos
     * @param  float $dni_num   DNI
     * @param  string $dni_let   Letra
     * @return float           Cambio
     */
    public function compruebaNumero_Letra($dni_num, $dni_let){
        if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $dni_num%23, 1) == $dni_let && strlen($dni_let) == 1 && strlen ($dni_num) == 8 ){
            return "valido";
        }else{
            return "no valido";
        }
    }
    
}

?>