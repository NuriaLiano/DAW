<?php



class PesosWebService{
    
    
    private $peso;
    
    
    public function __construct()
    {
        $this->peso = 0;
    }
    
    
    /**
     * Función de cambiar pesos
     * @param  string $origen   Origen (ES, END)
     * @param  float $cantidad Cantidad
     * @return float           Cambio
     */
    public function cambiarPeso($origen, $cantidad){
        
        if($origen == "ES"){
            
            return $this->peso = round($cantidad);
            
        }else{
            return $this->peso = round(($cantidad * 2.205));
        }
    }
}


?>