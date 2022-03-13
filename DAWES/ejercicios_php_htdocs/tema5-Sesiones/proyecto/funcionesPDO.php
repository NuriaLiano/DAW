<?php 
    function lista_productos() {
        $conexion = getConnexion();
        $sql = 'SELECT * FROM productos';
        $row =$conexion->query($sql);
        if ($row) {
            while(($producto = $row->fetch()) != null){
                $productos[] = $producto;
            }
        }
        $conexion->close();
        return $productos;
    }
    
    function login($usuario, $password){
        $resultado = false;
        
        $conexion = getConnexion();
        $consulta = $conexion->stmt_init();
        
        $consulta->prepare('SELECT password FROM usuarios WHERE usuario = ?');
        $consulta->bind_param('s', $usuario);
        $consulta->execute();
        $consulta->bind_result($p);
        
        while ($consulta->fetch()) {
            if ($p == $password) {
                $resultado = true;
                break;
            }
        }
        //se cierra la conexion
        $consulta->close();
        return $resultado;
    }
?>


