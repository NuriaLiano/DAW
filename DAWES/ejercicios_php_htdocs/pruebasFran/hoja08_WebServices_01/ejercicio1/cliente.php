<?php


function cambiarUnidades($origen, $destino, $fecha, $importe)
{
	try {
		
	    $wsdl = "http://127.0.0.1/Tema-8/hoja08_WebServices_01/ejercicio1/monedas/MonedasWSDL.php";
	    // WDSL: Archivo con la publicacion de las funciones a las que se puede acceder en el servidor.
	  
		$cliente = new SoapClient($wsdl); 
			
		
	    return $cliente->cambiarMonedas($origen, $destino, $fecha, $importe);
	} 
	catch (Exception $e) {
	    echo "Exception occured: " . $e;
	}	
}


