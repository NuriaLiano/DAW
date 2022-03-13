<?php
    function validarNombre($nombre){
        if(strlen($nombre) < 4 )return false;
        return true;
    }

    function validarDNI($dni){
        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);
        if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
          return true;
        }else{
          return false;
        }
    }

    function validarPasswords($pass1, $pass2){
        return $pass1 == $pass2 && strlen($pass1) >5;
    }


    
?>