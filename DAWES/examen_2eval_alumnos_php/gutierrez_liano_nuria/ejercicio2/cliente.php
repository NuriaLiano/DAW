<?php
//require 'Funciones.php';
require 'WSDLDocument.php';

  $wsdl = 'http://127.0.0.1/examen_2eval_alumnos/gutierrez_liano_nuria/ejercicio2/funciones/crearWDSL.php';
  $cliente = new SoapClient($wsdl);
  
  global $resultado;
  global $precio;
  global $marcas;


  $resultado = $cliente->getTelefonos();
  $precio = $cliente->getPrecios(2);
  $marcas = $cliente ->getMarcas();


?>