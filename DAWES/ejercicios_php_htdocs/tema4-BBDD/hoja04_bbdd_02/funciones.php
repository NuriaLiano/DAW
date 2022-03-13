<?php 
    include 'conexionBD.php';
    
    /*function getEquipos(){
        
        $conexion = getConexion();
       
        $prueba = $conexion->query("select * from pasajeros");
        while ($prueba != null) {
           $prueba = $prueba ->fetch_array();
        }
        
        $conexion->close();
        
        return $prueba;
        
    }
    print_r(getEquipos());*/

    
    function llegada(){
        //EJECUTAR CON TRANSACCIONES
        $bbdd = getConexion();
        /*la tabla de pasajeros esta vacia por defecto*/
        $comprobar = true;
        $conexion -> autocommit(false);
        
        $consultaUpdate = $conexion ->stmt_init();
        $consultaUpdate -> prepare("UPDATE * from pasajeros");
        $consultaUpdate -> execute();
        $comprobar = false;
        $consultaUpdate -> close();
        
        $consultaDelete = $conexion->stmt_init();
        $consultaDelete -> prepare("DELETE * from pasajeros");
        $consultaDelete -> execute();
        $comprobar = false;
        $consultaDelete -> close();
        
        //mensaje de comprobacion
        if (!$comprobar == true) {
            $conexion ->commit();
            print "<p>Los cambios se han realizado correctamente</p>";
        }else{
            $conexion ->rollback();
            print "<p>Los cambios NO se ha podido realizar</p>";
        }
        
    }
    
    function getPlazasNoReservadas(){
        $bbdd = getConexion();
        $resultado = "SELECT numero, precio from plazas where reservada=0";
        if($resultado){
            while(($plaza = $resultado -> fetch_array()) != null){
                $plazas [] = $plaza;
                
                $resultado -> close();
                
            }
            
        }
        $conexion->close();
        return plazas;
    }
    
    
    
    







?>