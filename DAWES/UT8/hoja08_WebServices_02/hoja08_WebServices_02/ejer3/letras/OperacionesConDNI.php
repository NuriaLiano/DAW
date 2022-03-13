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
     * @param  float $numeros   DNI
     * @param  string $letras   Letra
     * @return float           Cambio
     */
    public function compruebaNumero_Letra($numeros, $letras){
        if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letras && strlen($letras) == 1 && strlen ($numeros) == 8 ){
            return "valido";
        }else{
            return "no valido";
        }
    }
    
}

?>