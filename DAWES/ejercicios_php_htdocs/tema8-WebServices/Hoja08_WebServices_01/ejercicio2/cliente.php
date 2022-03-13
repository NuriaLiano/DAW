<?php


function cambiarUnidades($origen, $importe)
{
    try {
        
        $wsdl = "http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_01/ejercicio2/jugadores/PesoWSDL.php";
        // WDSL: Archivo con la publicacion de las funciones a las que se puede acceder en el servidor.
        
        $cliente = new SoapClient($wsdl);
        
        
        return $cliente->cambiarPeso($origen, $importe);
    }
    catch (Exception $e) {
        echo "Exception occured: " . $e;
    }
}
?>