    <?php
    require_once "conexionPDO.php";

    function getEquipos()
    {
        $conexionNBA = getConexion("dwes_01_nba");
        $resultado = $conexionNBA->query("SELECT nombre FROM equipos");
        unset($conexionNBA);
        return $resultado;

        $pdo=getConexion();
        $consulta="select * from equipos";
        if ($resultado=$pdo->query($consulta)) {
            while ($equipo=$resultado->fetch(PDO::FETCH_OBJ)) {
                $equipos[]=$equipo->nombre;
            }
            unset($resultado);
        }
        unset ($pdo);
        return $equipos;
    }
 

    /*function getJugadores($equipo)
    {
        $conexionNBA = getConexion("dwes_01_nba");
        $consulta = $conexionNBA->exec("SELECT nombre, peso FROM jugadores WHERE nombre_equipo='" . $equipo . "'");
        unset($conexionNBA);
        return $consulta;

    }*/

    function getJugadoresEquipo($equipo){
        $mysqli=getConexion();
        $consulta="select nombre, peso from jugadores where nombre_equipo='$equipo'";
        if ($resultado=$mysqli->query($consulta)) {
            while ($jugador=$resultado->fetch()) {
                $jugadores[]=$jugador["nombre"];
            }
            unset($resultado);
        }
        unset($pdo);
        return $jugadores;

    }

    ?>
