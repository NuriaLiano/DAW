<?php

    function validarNombre($nombre){
        if(strlen($nombre) < 4 )return false;
        return true;
    }

    function validarDNI($dni){
          $letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
          $num = substr($dni, 0,-1);
          $resto = fmod($num, 23);
          $letra = substr($letras, $resto,1);
          $letraL = substr($dni, -1);
          if($letra == $letraL){
              return true;
          }else{
              return false;
          }
       }
    
    function validarPasswords($pass1, $pass2){
        return $pass1 == $pass2 && strlen($pass1) >5;
    }

    function validar(){
      if (isset($_POST['nombre']) && isset($_POST['dni']) && isset($_POST['pass1']) && isset($_POST['pass2'])) {
        $respuesta = array();
        
        if (validarNombre($_POST['nombre']) == false) { 
          $respuesta['errorNombre'] = utf8_encode("El nombre debe tener mas de 3 caracteres.");
        }
        if(validarDNI($_POST['dni'])==false){
          $respuesta['errorDNI'] = utf8_encode("El DNI no es valido.");
        }
        if(validarPasswords($_POST['pass1'],$_POST['pass2'])==false){
          $respuesta['errorPassword'] = utf8_encode("La contrasenia no es valida o no coinciden.");
        }
        return $respuesta;
      }
    }

    echo json_encode(validar());
    
?>