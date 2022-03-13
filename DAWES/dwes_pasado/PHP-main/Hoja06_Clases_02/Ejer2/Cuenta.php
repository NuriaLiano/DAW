<?php


class Cuenta
{
    protected $numero, $titular, $saldo;

    /**
     * Cuenta constructor.
     * @param $numero
     * @param $titular
     * @param $saldo
     */
    public function __construct($numero, $titular, $saldo)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * @param mixed $titular
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function ingreso($cantidad)
    {
        $this->saldo += $cantidad;
    }

    public function reintegro($cantidad)
    {
        $this->saldo -= $cantidad;
    }

    public function esPreferencial($cantidad)
    {
        return $this->saldo > $cantidad;
    }

    public function mostrar()
    {
        echo "<p>El cliente con número: " . $this->numero . " es " . $this->titular . " y tiene-> " . $this->saldo . "€</p>";
    }
}