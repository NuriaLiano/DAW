<?php

function calculaLet($dni)
{
    try {
        $wsdl = "http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_02/ejercicio4/letras/servidor.php?wsdl";
        // WDSL: Archivo con la publicacion de las funciones a las que se puede acceder en el servidor.
        $cliente = new SoapClient($wsdl);
        
        return $cliente->calculaLetra($dni);
    }
    catch (Exception $e) {
        echo "Exception occured: " . $e;
    }
}

function compruebaNumLet($dni_num, $dni_let)
{
	try {
	    $wsdl = "http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_02/ejercicio4/letras/servidor.php?wsdl";
	    // WDSL: Archivo con la publicacion de las funciones a las que se puede acceder en el servidor.
	  
		$cliente = new SoapClient($wsdl); 
		
		return $cliente->compruebaNumero_Letra($dni_num, $dni_let);
	} 
	catch (Exception $e) {
	    echo "Exception occured: " . $e;
	}	
}

