<?php
include_once 'BD.php';

header("Content-type: text/xml");

$dom = new DOMDocument("1.0");
$nodo = $dom->createElement("markers");
$nodoPadre = $dom->appendChild($nodo);


foreach (getLocalizaciones() as $localizacion) {
    
    $nodo = $dom->createElement("marker");
    $nodoMarker = $nodoPadre->appendChild($nodo);
    $nodoMarker->setAttribute("id",$localizacion["id"]);
    $nodoMarker->setAttribute("name",$localizacion["nombre"]);
    $nodoMarker->setAttribute("address",$localizacion["direccion"]);
    $nodoMarker->setAttribute("lat",$localizacion["latitud"]);
    $nodoMarker->setAttribute("lng",$localizacion["longitud"]);
    $nodoMarker->setAttribute("type",$localizacion["tipo"]);
}


echo $dom->saveXML();