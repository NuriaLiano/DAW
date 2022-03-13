<?php
require_once "Cuenta.php";

class CuentaAhorro extends Cuenta
{
    private $comision_apertura, $intereses;

    public function __construct($numero, $titular, $saldo, $comision_apertura, $intereses)
    {
        parent::__construct($numero, $titular, $saldo);
        $this->comision_apertura = $comision_apertura;
        $this->intereses = $intereses;
        $this->saldo -= $this->comision_apertura;
    }

    public function aplicarInteres()
    {
        $this->saldo += ($this->saldo * $this->intereses / 100);
    }

    public function mostrar()
    {
        echo parent::mostrar() . $this->comision_apertura . $this->intereses;
    }

}