<?php 

   class Monedero {
       
       private $dinero;
       public static $numero_monederos = 0;
       
       
       public function __construct($capInicial) {
           $this->dinero = $capInicial;
           self::$numero_monederos++;
           
       }
       
       //destruir objeto
       public function __destruct() {
           self::$numero_monederos--; //self es para llamar a a vriable contaador por que es ESTATICA
       }
       
       public function introDinero($capIngreso) {
           return $this->dinero += $capIngreso;
            
       }
       public function sacarDinero($capRetirar) {
           if ($this->dinero > $capRetirar) {
               return $this->dinero -= $capRetirar;
           }else{
               echo "El saldo es inferior";
           }
           
       }
       public function consultarMonedero() {
           echo "El saldo del monedero es de: ". $this->dinero;
           
       }
       public function cuantosMonederos() {
           echo "El numero de monederos es: ". self::$numero_monederos;
       }
       
      
       
   }
    

?>