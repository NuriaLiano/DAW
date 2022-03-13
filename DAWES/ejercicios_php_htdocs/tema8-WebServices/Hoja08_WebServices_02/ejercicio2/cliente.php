<?php

function cambiarUnidades($dni_num, $dni_let)
{
	try {
		
	    $wsdl = "http://127.0.0.1/Tema8/Hoja08_WebServices_02/ejercicio2/letras/LetrasWSDL.php";
	    // WDSL: Archivo con la publicacion de las funciones a las que se puede acceder en el servidor.
	  
		$cliente = new SoapClient($wsdl); 
		
	    return $cliente->calculaLetra($dni_num, $dni_let);
	} 
	catch (Exception $e) {
	    echo "Exception occured: " . $e;
	}	
}

