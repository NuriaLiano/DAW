<?php 

class Cuenta {
    private $saldo, $titular, $numero, $informacion;
    
    public function __construct($numero, $titular, $saldo){
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    
    public function ingreso($cantidad){
        $this->saldo += $cantidad;
        return $this->saldo;
    }
    
    public function reintegro($cantidad){
        $this->saldo -= $cantidad;
        return $this->saldo;
    }
    
    public function esPreferencial($cantidad){
        if ($this->saldo > $cantidad) {
            echo "La cantidad es menor que el saldo";
            return true;
        }elseif ($this->saldo == $cantidad){
            echo "la cantidad es igual";
        }else{
            echo "La cantidad es mayor que el saldo";
            return false;
        }
    }
    
    public function mostrar() {
        //en html
        echo  "
          <h3> Los datos de la cuenta de ".$this->titular." </h3>
          <p>Numero de cuenta: ".$this->numero." </p>
          <p>Nombre del titular de la cuenta: ".$this->titular." </p>
          <p>Saldo de la cuenta normal: ".$this->saldo." euros </p> 
        ";
    }   
}

class CuentaCorriente extends Cuenta {
    
    private $cuota_mantenimiento, $saldoCCorriente;
    
    public function __construct($numero, $titular, $saldo, $cuota_mantenimiento) {
        parent::__construct($numero, $titular, $saldo);
        $this->cuota_mantenimiento = $cuota_mantenimiento;
        //restar la cuota de mantenimiento
        $this->saldoCCorriente = $saldo - $this->cuota_mantenimiento;
        //echo $this->saldoCCorriente; 
    }
    
    public function reintegro($cantidad) {
        
        if ($this->saldoCCorriente <= 20) {
            echo "NO PUEDES SACAR DINERO POR QUE EL SALDO ES MENOR";
        }else{
            //parent::reintegro($cantidad);
            $this->saldoCCorriente -= $cantidad;
        }
    }
    public function mostrar() {
        
        $datosCCorriente = parent::mostrar();
        $datosCCorriente = "<p>Saldo de la cuenta corriente: ".$this->saldoCCorriente." euros";
        echo $datosCCorriente;
    } 
}

class CuentaAhorro extends Cuenta {
    
    private $comision_apertura, $intereses, $saldoCAhorro;
    
    public function __construct($numero, $titular, $saldo, $comision_apertura, $intereses) {
        parent::__construct($numero, $titular, $saldo);
        $this->comision_apertura = $comision_apertura;
        $this->intereses = $intereses;
        //restar la comision
        $this->saldoCAhorro = $saldo - $this->comision_apertura;
        //echo $this->saldoCAhorro;
    }
    
    public function aplicaIntereses() {
       return $this->saldoCAhorro = ($this->saldoCAhorro * $this->intereses)/100 + $this->saldoCAhorro;
         
    }
    
    public function mostrar() {
        
        $datosCCorriente = parent::mostrar();
        $datosCCorriente = "<p>Saldo de la cuenta ahorro: ".$this->saldoCAhorro." euros";
        echo $datosCCorriente;
        
        
    }
    
    
    
    
    
}






?>