<?php

require_once 'conexion.php';


function getEquipos(){
    $arrayEquipos = [];
    $conexion = getConexion();

    $resultado = $conexion->query('SELECT nombre FROM equipos');
    
    $listaEquipos = $resultado->fetch_array(); 

    //IMPORTANTE EL ARRAY PUSH PARA METER EL PRIMER ELEMENTO
    array_push($arrayEquipos, $listaEquipos);
    
    while ($listaEquipos != null){
        $listaEquipos = $resultado->fetch_array(); 
        //METE EL RESTO DE ELEMENTOS DESDE LA POSICION 1
        array_push($arrayEquipos, $listaEquipos);
        
    }
    
    
    //print_r($arrayEquipos);
    return $arrayEquipos;
}

function getEquiposPDO(){
    $arrayEquipos = [];
    $conexion = getConexionPDO();

    $resultado = $conexion->query('SELECT nombre FROM equipos');
    while ($listaEquipos = $resultado->fetch()){
        array_push($arrayEquipos, $listaEquipos);
    }

    return $arrayEquipos;
}

function getJugadorEquipo($equipo){
    $arrayJugEqui = [];
    $conexion = getConexion();

    $resultado = $conexion->query("SELECT nombre, peso, posicion FROM jugadores WHERE nombre_equipo = '$equipo'");
    $lista = $resultado->fetch_array(); 
    //IMPORTANTE EL ARRAY PUSH PARA METER EL PRIMER ELEMENTO
    array_push($arrayJugEqui, $lista);
    while ($lista != null){
        $lista = $resultado->fetch_array();
        //METE EL RESTO DE ELEMENTOS DESDE LA POSICION 1
        array_push($arrayJugEqui, $lista);
        
    }
    //print_r($arrayJugEqui);
    return $arrayJugEqui;
}

function traspaso($nombrenuevo, $procedencianueva, $alturanueva, $pesonuevo, $posicionnueva, $nombrejugador){
    $conexion = getConexion();
    $todoOk = true;
    $conexion->autocommit(false);
    if ($conexion->query("UPDATE jugadores SET nombre = '$nombrenuevo', procedencia = '$procedencianueva', altura = '$alturanueva', peso = '$pesonuevo', posicion = '$posicionnueva' WHERE nombre = '$nombrejugador' ") != true) $todoOk = false; //Si hay error ponemos
     
    if ($todoOk == true){
        $conexion->commit();
        print "<p>Los cambios se han realizado correctamente.</p>";
    }else{
        $conexion->rollback();
        print "<p>No se han podido realizar los cambios.</p>";
    }

}

function actualizarPeso($nuevoPeso, $equipo){
    $conexion = getConexion();
    $todoOk = true;
    $conexion->autocommit(false);
    if ($conexion->query("UPDATE jugadores SET peso = '$nuevoPeso' WHERE nombre_equipo = '$equipo' ") != true) $todoOk = false; //Si hay error ponemos
     
    if ($todoOk == true){
        $conexion->commit();
        print "<p>Los cambios se han realizado correctamente.</p>";
    }else{
        $conexion->rollback();
        print "<p>No se han podido realizar los cambios.</p>";
    }

}
    

//getEquipos();
//getEquiposPDO();
//getJugadorEquipo("Timberwolves");
?>