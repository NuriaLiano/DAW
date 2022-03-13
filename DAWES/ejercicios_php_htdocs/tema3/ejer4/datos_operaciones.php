<?php 
    
    $pri = $_REQUEST["numpri"];
    $seg = $_REQUEST["numseg"];
    $operador = $_REQUEST["operador"];
    
    function operaciones($numerouno, $numerodos, $operador) {
        if($operador == "+"){
            echo "la suma de " . $numerouno . " + ". $numerodos . " = ". $numerouno+$numerodos;
        }else if($operador == "-"){
            echo "la resta de " . $numerouno . " - ". $numerodos . " = ". $numerouno-$numerodos;
        }else if($operador == "*"){
            echo "el producto de " . $numerouno . " * ". $numerodos . " = ". $numerouno*$numerodos;
        }else if($operador == "/"){
            echo "el cociente de " . $numerouno . " / ". $numerodos . " = ". $numerouno/$numerodos;
        }else{
            echo "El operador no es válido";
        }  
    }
    
    //Llamar a la funcion
    echo (operaciones($pri, $seg, $operador));


?>