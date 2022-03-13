<?php



class LetrasWebService{
      
    /**
     * Funcion de comprobar letra y numero
     * @param  float $numeros   DNI
     * @param  string $letras   Letra
     * @return float           Cambio
     */
    public function calculaLetra($numeros, $letras){    
        if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letras && strlen($letras) == 1 && strlen ($numeros) == 8 ){
            return "Es correcto";
        }else{
            return "La letra no coincide";
        }
}

}

?>