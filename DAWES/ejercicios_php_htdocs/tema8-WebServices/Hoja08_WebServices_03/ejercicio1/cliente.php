<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
 table {
   width: 100%;
   border: 1px solid #000;
}
th, td {
   width: 25%;
   text-align: center;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
}
caption {
  display: table-caption;
  text-align: center;
  padding: 0.3em;
  color: #fff;
  background: #000;
}
th {
   background: #eee;
}
fieldset{
  text-align: center;
  background-color: black;
  color: white;
}
option{
  text-align: center;
  color: white;
}
select{
  background-color: black;
  color: white;
}
</style>
<body>
  
</body>
</html>
<?php
require 'Funciones.php';

  // Permitimos el uso de acentos y caracteres especiales
  header('Content-Type: text/html; charset=UTF-8');
  try {
  // creamos el objeto de cliente SOAP con nuestro fichero
  $url = 'http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_03/ejercicio1/servidor.php';
  $uri = 'http://127.0.0.1/ejercicios/tema8-WebServices/Hoja08_WebServices_03/ejercicio1';

  $cliente = new SoapClient(null, array('location'=>$url, 'uri'=>$uri));
  
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
  foreach($codigosF as $cod)
    echo "<tr><td>Código</td><td><b>".$cod."</b></td></tr>";   
    echo "</table>";
    
}catch (Exception $e) {
  echo "Exception occured: " . $e;
}
?>