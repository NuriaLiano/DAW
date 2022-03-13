<?php 

$uno = $_REQUEST['uno'];
$dos = $_REQUEST['dos'];
$tres = $_REQUEST['tres'];
$cuatro = $_REQUEST['cuatro'];
$cinco = $_REQUEST['cinco'];
$seis = $_REQUEST['seis'];
$siete = $_REQUEST['siete'];
$ocho = $_REQUEST['ocho'];
$nueve = $_REQUEST['nueve'];
$diez = $_REQUEST['diez'];

$general = array($uno, $dos, $tres, $cuatro, $cinco, $seis, $siete, $ocho, $nueve, $diez);

for ($i = 0; $i < 10; $i++) {
    $contadorpos = 0;
    $contadorneg = 0;
    $numero = $general[$i];
    if ($numero>0) {
        $contadorpos++;
    }else if($numero<0){
        $contadorneg++;
    }else{
        echo "no se puede introducir el 0";
    }
}
echo " Numeros positivos: ".$contadorpos;
echo "<br/>";
echo " Numeros negativos: ".$contadorneg;
echo "<br/>";
echo '<a href ="ejercicio3_gutierrez_liano_nuria.html">Go back</a>';







?>