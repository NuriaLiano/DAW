<?php

class Usuario
{
    
    protected $foto;
    
    protected $usuario;
    
    protected $password;
    
    
    
    public function __construct($usuario, $pass, $foto)
    {
        $this->usuario = $usuario;
        $this->password = $pass;
        $this->foto = $foto;
    }
    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }
    
    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
    
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }
    
    /**
     * @param mixed $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    
    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    public static function obtener_usuario($usu)
    {
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
        // BINDING CONSULTA
        $consulta = $conexion->prepare("SELECT usuario, password, foto FROM usuarios WHERE usuario = :usu");
        $consulta->bindParam(':usu', $usu, PDO::PARAM_STR);
        $consulta->execute();
        
        // VOLCAMOS EL RESULTADO EN UN ARRAY
        $listaUsuarios = [];
        while ($usuarios = $consulta->fetch(PDO::FETCH_OBJ)) {
            array_push($listaUsuarios, $usuarios);
        }
        
        // CERRAMOS CONEXIÃ“N
        unset($consulta);
        
        return $listaUsuarios;
    }
    
    public static function obtenerComentarioUsuario($pro)
    {
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
        // BINDING CONSULTA
        $consulta = $conexion->prepare("SELECT c.id id, c.product product, c.comentario comentario FROM comentarios c INNER JOIN usuarios p ON c.usu = p.usuario WHERE c.usu = :pro");
        $consulta->bindParam(':pro', $pro, PDO::PARAM_STR);
        $consulta->execute();
        
        // VOLCAMOS EL RESULTADO EN UN ARRAY
        $resultado = [];
        while ($producto = $consulta->fetch()) {
            $resultado[$producto["id"]] = [
                "product" => $producto["product"],
                "comentario" => $producto["comentario"]];
        }
        
        // CERRAMOS CONEXIÃ“N
        unset($consulta);
        
        return $resultado;
    }
    
    public static function eliminarComentariosUsuario($pro){
        
        $todoBien = false;
        
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
        $conexion->beginTransaction();
        
        $deletecomment = $conexion->prepare("DELETE FROM comentarios WHERE usu=:pro");
        $deletecomment->bindParam(':pro', $pro, PDO::PARAM_STR);
        $deletecomment->execute();
        $numeroDeleteComment = $deletecomment->rowCount();
        
        if ($numeroDeleteComment >= 1) {
            $conexion->commit();
            $todoBien = true;
        } else {
            $conexion->rollback();
            
        }
        
        unset($conexion);
        
        return $todoBien;
    }
    
    public static function mod_usuario($usuViejo,$usu, $contra)
    {
        $todoBien = false;
        
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
        $conexion->beginTransaction();
        
        $updatePlazas = $conexion->prepare('UPDATE usuarios SET usuario = :usu , password = :pass WHERE usuario = :usuViejo');
        $updatePlazas->bindParam(':usuViejo', $usuViejo, PDO::PARAM_STR);
        $updatePlazas->bindParam(':usu', $usu, PDO::PARAM_STR);
        $updatePlazas->bindParam(':pass', $contra, PDO::PARAM_STR);
        $updatePlazas->execute();
        $numeroPlazasUpdate = $updatePlazas->rowCount();
        
        if (1 == $numeroPlazasUpdate) {
            $conexion->commit();
            $todoBien = true;
        } else {
            $conexion->rollback();
            
        }
        
        unset($conexion);
        
        return $todoBien;
    }
    
    public static function cargarImagen($usu, $ruta)
    {
        $todoBien = false;
        
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
        $conexion->beginTransaction();
        
        $updatePlazas = $conexion->prepare('UPDATE usuarios SET foto = :foto WHERE usuario = :usu');
        $updatePlazas->bindParam(':foto', $ruta, PDO::PARAM_STR);
        $updatePlazas->bindParam(':usu', $usu, PDO::PARAM_STR);
        $updatePlazas->execute();
        $numeroPlazasUpdate = $updatePlazas->rowCount();
        
        if (1 == $numeroPlazasUpdate) {
            $conexion->commit();
            $todoBien = true;
        } else {
            $conexion->rollback();
            
        }
        
        unset($conexion);
        
        return $todoBien;
    }
    
    public static function eliminarUsuario($usu){
        
        $todoBien = false;
        
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
        $conexion->beginTransaction();
        
        $updatePlazas = $conexion->prepare("DELETE FROM usuarios WHERE usuario=:usu");
        $updatePlazas->bindParam(':usu', $usu, PDO::PARAM_STR);
        $updatePlazas->execute();
        $numeroPlazasUpdate = $updatePlazas->rowCount();
        
        if (1 == $numeroPlazasUpdate) {
            $conexion->commit();
            $todoBien = true;
        } else {
            $conexion->rollback();
            
        }
        
        unset($conexion);
        
        return $todoBien;
    }
    
    
}

    

?>