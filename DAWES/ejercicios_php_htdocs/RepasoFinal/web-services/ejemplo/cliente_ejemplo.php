<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<?php
//require 'Funciones.php';
require 'WSDLDocument.php';

  // Permitimos el uso de acentos y caracteres especiales
  header('Content-Type: text/html; charset=UTF-8');

  // creamos el objeto de cliente SOAP con nuestro fichero
  $wsdl = 'http://localhost/ejercicios/tema8-WebServices/Hoja08_WebServices_03/ejercicio2/crearWDSL.php';
  $cliente = new SoapClient($wsdl);
  
  $pvp = $cliente->getPVP('978-8478979820');
    echo "<fieldset>".$pvp."</fieldset>";

    echo "<br/>";

  $familias = $cliente->getFamilias();
  echo "<select>Seleccione"; 
  foreach ($familias as $f){
      echo "<option>".$f."</option>";
    }
   echo "</select>";

   echo "<br/>";
   echo "<br/>";


  $codigosF = $cliente->getProductosFamilia("Redes");
  echo "<table>";
  echo "<caption>Los códigos de productos de la familia Redes disponibles son:</caption>"; 
  foreach($codigosF as $cod){
    echo "<tr><td>Código</td><td><b>".$cod."</b></td></tr>";  
  } 
    echo "</table>";