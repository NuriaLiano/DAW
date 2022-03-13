<?php

require("bd.php");

// inicio de xml y crear nodos padres

$dom = new DOMDocument("1.0");
$nodo = $dom->createElement("marcadores");
$parnodo = $dom->appendChild($nodo);

$BD = new BD("localhost", "root", "", "dwes_05_mapa");
$conexion = $BD->getConexion();


header("Content-type: text/xml");

// obtenes las localizaciones | devuelve una array
$listado = $BD->getLocalizaciones();

//var_dump($listado);
// añadir al fichero xml
foreach ($listado as $lo ) {
  
  $serializado = serialize($lo);
  
  //$decodificado = json_decode($serializado);
  //print_r ($decodificado);
  //echo gettype($serializado);
  $nodo = $dom->createElement("marcador");
  $nuevoNodo = $parnodo->appendChild($nodo);
  
  if(isset($serializado['id'])){
    //$nuevoNodo->setAttribute("id",$serializado['id']);
    echo $serializado['id'];
  }
  /*if(isset($serializado['nombre'])){
    $nuevoNodo->setAttribute("nombre",$serializado['nombre']);
  }
  if(isset($serializado['direccion'])){
    $nuevoNodo->setAttribute("direccion", $serializado['direccion']);
  }
  if(isset($serializado['latitud'])){
    $nuevoNodo->setAttribute("lat", $serializado['latitud']);
  }
  if(isset($serializado['longitud'])){
    $nuevoNodo->setAttribute("lng", $serializado['longitud']);
  }
  if(isset($serializado['tipo'])){
    $nuevoNodo->setAttribute("tipo", $serializado['tipo']);
  }*/
}

//guardar contenido en fichero xml
echo $dom->saveXML();
