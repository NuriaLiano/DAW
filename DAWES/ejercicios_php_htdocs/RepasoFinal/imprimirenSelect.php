<?php

$wsdl = 'http://localhost/ejercicios/tema8-WebServices/Hoja08_WebServices_03/ejercicio2/crearWDSL.php';
$cliente = new SoapClient($wsdl);
$familias = $cliente->getFamilias();
  echo "<select>Seleccione"; 
  foreach ($familias as $f){
      echo "<option>".$f."</option>";
    }
   echo "</select>";



?>