<?php
require_once 'includes/BaseDatos.class.php';
require_once 'modelo.php';

global $nombre_usuario,$sumaPrecios,$cesta;


$nombre_usuario = $_SESSION["usuario"];



// INICIALIZACIÃƒâ€œN SESIÃƒâ€œN CESTA
if (isset($_SESSION["cesta"])) {
    
    $cesta = $_SESSION["cesta"];
    
    foreach ($cesta as $producto){
        
        $p = unserialize($producto);
        
        $sumaPrecios += $p->getPrecio();
        
    }
} else {
    $cesta = [];
    $sumaPrecios = 0;
}


if (isset($_POST["borrarProducto"])) {
    
    $arrayAux = [];
    
    $codBorrar = $_POST["codBorrar"];
    
    foreach ($cesta as $producto){
        
        $p = unserialize($producto);     
     
        if($codBorrar != $p->getCodigo()){
            
            $a = serialize($p);
            
            array_push($arrayAux,$a);
            
            
        }
        
        if($codBorrar == $p->getCodigo()){
            $sumaPrecios -= $p->getPrecio();
        }
        
    }
    
    $cesta = $arrayAux;
    
     $_SESSION["cesta"] = $cesta;
    
}

if (isset($_POST["vaciarCesta"])) {
    
    unset($_SESSION["cesta"]);
    header("Location: index.php?option=productos");
}


if (isset($_POST["seguirComprando"])) {
    
    header("Location: index.php?option=productos");
}


if (isset($_POST["desconectarUsuario"])) {
    
    session_unset();
    header("Location: index.php?option=login");
}

if (isset($_POST["verDatosUsuario"])) {
    
    header("Location: index.php?option=datosUsuario");
}

if (isset($_POST["pagar"])) {
    
    header("Location: index.php?option=pagar");
}


require_once 'vista.php';

?> 