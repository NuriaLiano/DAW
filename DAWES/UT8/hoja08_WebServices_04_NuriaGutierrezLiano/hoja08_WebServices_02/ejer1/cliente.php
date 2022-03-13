<?php


function cambiarUnidades($dni)
{
	try {
		
	    $wsdl = "http://127.0.0.1/ejercicios/hoja08_WebServices_02/ejer1/letras/LetrasWSDL.php";
	    // WDSL: Archivo con la publicacion de las funciones a las que se puede acceder en el servidor.
	  
		$cliente = new SoapClient($wsdl); 
			
		
	    return $cliente->calculaLetra($dni);
	} 
	catch (Exception $e) {
	    echo "Exception occured: " . $e;
	}	
}

