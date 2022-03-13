<?php
require_once('OperacionesConDNI.php');
$server = new SoapServer(null, array('uri'=>''));
$server->setClass('OperacionesConDNI');
$server->handle();
?>
