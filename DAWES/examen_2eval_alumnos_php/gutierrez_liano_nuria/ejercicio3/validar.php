<?php
include 'Funciones.php';
    $respuesta = array();
    $conexion = new Funciones();
    $bbdd = $conexion->getConexion();

    function validar_modelo($modelo){
      $bbdd = $conexion->getConexion();
      $contador = 0;

      $modelos = $bbdd->getTelefonos();
      foreach($modelos as $mov){
        if($modelo != $mov){
          $contador++;
        }
      }
      if($contador >0){
        return false;
      }

    }
    function validar_marca($marca){
      $contador = 0;

      $modelos = $bbdd->getTelefonos();
      foreach($modelos as $mov){
        if($marca != $mov){
          $contador++;
        }
      }
      if($contador >0){
        return false;
      }
    }
    function validar_memoria($memoria){
      $mayus= array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
      $con = 0;
      $cont = 0;
      $minus= array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
      for ($i=0; $i < count($mayus); $i++) { 
        if($memoria == $mayus[$i]){
            $con++;
        }
      }
      for ($i=0; $i < count($minus); $i++) { 
        if($memoria == $minus[$i]){
          $cont++;
        }
      }
      if($con > 0 && $cont > 0){
        return false;
      }
    }
    function validar_precio($precio){
      $mayus= array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
      $con = 0;
      $cont = 0;
      $minus= array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
      for ($i=0; $i < count($mayus); $i++) { 
        if($precio == $mayus[$i]){
            $con++;
        }
      }
      for ($i=0; $i < count($minus); $i++) { 
        if($precio == $minus[$i]){
          $cont++;
        }
      }
      if($con > 0 && $cont > 0){
        return false;
      }
      
    }
    function validar_adquisicion($adquisicion){
        $valores = explode('/', $adquisicion);
        if(count($valores) == 3 && checkdate($valores[0], $valores[1], $valores[2])){
            return false;
        }
    }

      
    if (isset($_POST['modelo']) && isset($_POST['marca']) && isset($_POST['memoria']) && isset($_POST['precio']) && isset($_POST['adquisicion'])) {

      function validar_formulario(){
      
        if (validar_modelo($_POST['modelo']) == false) { 
          $respuesta['errorModelo'] = utf8_encode("El modelo introducido es un dígito.");
        }
        if (validar_marca($_POST['marca']) == false) { 
          $respuesta['errorMarca'] = utf8_encode("La marca introducida es un dígito.");
        }
        if (validar_memoria($_POST['memoria']) == false) { 
          $respuesta['errorMemoria'] = utf8_encode("La memoria no es correcta.");
        }
        if (validar_precio($_POST['precio']) == false) { 
          $respuesta['errorPrecio'] = utf8_encode("El precio no es correcto.");
        }
        if (validar_adquisicion($_POST['adquisicion']) == false) { 
          $respuesta['errorAdquisicion'] = utf8_encode("El fecha no es correcta.");
        }

        return $respuesta;
      }
    }


    //importante poner el json encode con el echo para que imprima la funcion 
    echo json_encode($respuesta);
    
?>