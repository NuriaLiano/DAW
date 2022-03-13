<?php



class LetrasWebService{
      
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

}

?>