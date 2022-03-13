<?php 



class MonedasWebService{

	
	private $cambios;
	

	public function __construct()
	{
		$cambios_euros = array("EUR"=> 1, "GBP" => 0.88, "USD" => 1.14);
		$cambios_libras = array("GBP"=>1, "EUR" => 1/$cambios_euros["GBP"], "USD" => 1.29);
		$cambios_dolares = array("USD"=>1, "EUR" => 1/$cambios_euros["USD"], "GBP" => 1/$cambios_libras["USD"]);


		$this->cambios = array("EUR" => $cambios_euros, "GBP" => $cambios_libras, "USD" => $cambios_dolares);
	}

	
	/**
	 * Función de cambiar monedas
	 * @param  string $origen   Origen (EUR, GBP o USD)
	 * @param  string $destino  Destino (EUR, GBP o USD)
	 * @param  string $fecha    Fecha
	 * @param  float $cantidad Cantidad
	 * @return float           Cambio
	 */	
	public function cambiarMonedas($origen, $destino, $fecha, $cantidad){
		//print_r($this->cambios);
		return round(($this->cambios[$origen][$destino])*$cantidad,2);
	}
}



?>