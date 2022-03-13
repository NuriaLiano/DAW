<?php




class BD {
    
    
    
    public static function conexion(){
        return new PDO("mysql:dbname=dwes_01_nba;host=localhost","root","");
    }
    
       
    public static function mostrarJugadores($criterio)
    {
        
        $pdo = self::conexion();
        $lista=[];
        $consulta = "select jugadores.nombre, procedencia, jugadores.altura, jugadores.peso, jugadores.posicion, jugadores.nombre_equipo from jugadores where jugadores.nombre_equipo like :criterio";
        
        $stm=$pdo->prepare($consulta);
        $criterio="%$criterio%";
        $stm->bindParam(":criterio",$criterio);
        $stm->execute();
        $r=$stm->fetch(PDO::FETCH_ASSOC);
        
        while( $r!==false ){
            $u=new Jugador($r);
            $lista[]=$u;
            $r=$stm->fetch(PDO::FETCH_ASSOC);
        }
        $stm->closeCursor();
        
        return $lista;
    }
      
      
}