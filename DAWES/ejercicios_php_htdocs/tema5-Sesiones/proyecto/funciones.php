<?php 
    function lista_productos() {
        $conexion = getConnexion();
        $sql = 'SELECT * FROM productos';
        $row =$conexion->query($sql);
        if ($row) {
            while(($producto = $row->fetch_array()) != null){
                $productos[] = $producto;
            }
        }
        $conexion->close();
        return $productos;
    }
    
    function login ($usuario, $password){
        $resultado = false;
        $conexion = getConnexion();
        $consulta = $conexion ->stmt_init();
        
        $consulta->prepare('SELECT password FROM usuarios WHERE usuario = ?');
        $consulta->bind_param('s', $usuario);
        $consulta->execute();
        $consulta->bind_result($pass);
        while ($consulta->fetch()) {
            if ($pass == $password) {
                $resultado = true;
                break;
            }
        }
        $consulta->close();
        
        return $resultado;
    }
?>


