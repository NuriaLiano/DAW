<?php

class BD
{

    private $host;

    private $base;

    private $usuario;

    private $contra;

    function __construct($host, $base, $usu, $contra)
    {
        $this->host = $host;
        $this->base = $base;
        $this->usuario = $usu;
        $this->contra = $contra;
    }

    function conexionPDO()
    {
        $opciones = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );
        $conexion = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->base, $this->usuario, $this->contra, $opciones);
        return $conexion;
    }
    
    
    function autenticar()
    {
        $listaUsuarios = [];
        
        $conexion = $this->conexionPDO();
        
        $resultado = $conexion->query("SELECT usuario, password, foto FROM usuarios");
        
        while ($usuarios = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaUsuarios, $usuarios);
        }
        
        return $listaUsuarios;
    }
    
    function registrar($nombre_usuario, $hash_password, $foto)
    {
        $todoBien = false;
        
        $conexion = $this->conexionPDO();
        
        $conexion->beginTransaction();
        
        $insertUsuario = $conexion->prepare('INSERT INTO usuarios (usuario, password, foto) VALUES (?,?,?)');
        $insertUsuario->bindParam(1, $nombre_usuario, PDO::PARAM_STR);
        $insertUsuario->bindParam(2, $hash_password, PDO::PARAM_STR);
        $insertUsuario->bindParam(3, $foto, PDO::PARAM_STR);
        
        $insertUsuario->execute();
        $numeroUsuariosInsertados = $insertUsuario->rowCount();
        
        
        if ($numeroUsuariosInsertados == 1) {
            $conexion->commit();
            echo"Los cambios se han hecho correctamente";
            $todoBien = true;
        } else {
            $conexion->rollback();
            echo "Error";
        }
        
        unset($conexion);
        
        return $todoBien;
    }
    
    function obtener_productos()
    {
        $conexion = $this->conexionPDO();
        
        // BINDING CONSULTA
        $consulta = $conexion->prepare("SELECT p.codigo codigo, p.nombre nombre, p.descripcion descripcion, p.precio precio, f.nombre familia FROM productos p INNER JOIN familias f ON p.familia = f.codigo");
        $consulta->execute();
        
        // VOLCAMOS EL RESULTADO EN UN ARRAY
        $resultado = [];
        while ($producto = $consulta->fetch()) {
            $resultado[$producto["codigo"]] = [
                "nombre" => $producto["nombre"],
                "descripcion" => $producto["descripcion"],
                "precio" => $producto["precio"],
                "familia" => $producto["familia"]
            ];
        }
        
        // CERRAMOS CONEXIÓN
        unset($consulta);
        
        return $resultado;
    }
    
    function obtener_precio($codigo_producto, $unidades)
    {
        $conexion = $this->conexionPDO();
        
        // BINDING CONSULTA
        $consulta = $conexion->prepare("SELECT p.nombre nombre, p.precio * :unidades precio FROM productos p WHERE p.codigo = :codigo_producto");
        $consulta->bindParam(':unidades', $unidades, PDO::PARAM_INT);
        $consulta->bindParam(':codigo_producto', $codigo_producto, PDO::PARAM_STR);
        $consulta->execute();
        
        // VOLCAMOS EL RESULTADO EN UN ARRAY
        $resultado = [];
        while ($producto = $consulta->fetch()) {
            $resultado[$codigo_producto] = [
                "nombre" => $producto["nombre"],
                "precio" => $producto["precio"]
            ];
        }
        
        // CERRAMOS CONEXIÓN
        unset($consulta);
        
        return $resultado;
    }
    
    function obtener_usuario($usu)
    {
        $conexion = $this->conexionPDO();
        
        // BINDING CONSULTA
        $consulta = $conexion->prepare("SELECT usuario, password, foto FROM usuarios WHERE usuario = :usu");
        $consulta->bindParam(':usu', $usu, PDO::PARAM_STR);
        $consulta->execute();
        
        // VOLCAMOS EL RESULTADO EN UN ARRAY
        $listaUsuarios = [];
        while ($usuarios = $consulta->fetch(PDO::FETCH_OBJ)) {
            array_push($listaUsuarios, $usuarios);
        }
        
        // CERRAMOS CONEXIÓN
        unset($consulta);
        
        return $listaUsuarios;
    }
    
    function mod_usuario($usuViejo,$usu, $contra)
    {
        $todoBien = false;
        $conexion = $this->conexionPDO();
        
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
    
    function cargarImagen($usu, $ruta)
    {
        $todoBien = false;
        $conexion = $this->conexionPDO();
        
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
    
    
    function eliminarUsuario($usu){
        
        $todoBien = false;
        $conexion = $this->conexionPDO();
        
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

    function obtener_producto($pro)
    {
        $conexion = $this->conexionPDO();
        
        // BINDING CONSULTA
        $consulta = $conexion->prepare("SELECT p.codigo codigo, p.nombre nombre, p.descripcion descripcion, p.precio precio, f.nombre familia FROM productos p INNER JOIN familias f ON p.familia = f.codigo WHERE p.codigo = :pro");
        $consulta->bindParam(':pro', $pro, PDO::PARAM_STR);
        $consulta->execute();
        
        // VOLCAMOS EL RESULTADO EN UN ARRAY
        $resultado = [];
        while ($producto = $consulta->fetch()) {
            $resultado[$producto["codigo"]] = [
                "nombre" => $producto["nombre"],
                "descripcion" => $producto["descripcion"],
                "precio" => $producto["precio"],
                "familia" => $producto["familia"]
            ];
        }
        
        // CERRAMOS CONEXIÓN
        unset($consulta);
        
        return $resultado;
    }
    
    function mod_producto($codViejo,$cod, $nombre, $descrip, $precio)
    {
        $todoBien = false;
        $conexion = $this->conexionPDO();
        
        $conexion->beginTransaction();
        
        $updatePlazas = $conexion->prepare('UPDATE productos SET codigo = :cod , nombre = :nombre, descripcion = :des , precio = :precio WHERE codigo = :pro');
        $updatePlazas->bindParam(':pro', $codViejo, PDO::PARAM_STR);
        $updatePlazas->bindParam(':cod', $cod, PDO::PARAM_STR);
        $updatePlazas->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $updatePlazas->bindParam(':des', $descrip, PDO::PARAM_STR);
        $updatePlazas->bindParam(':precio', $precio, PDO::PARAM_STR);
        $updatePlazas->execute();
        $numeroPlazasUpdate = $updatePlazas->rowCount();
        
        if (1 == $numeroPlazasUpdate) {
            $conexion->commit();
            $todoBien = true;
        } else {
            $conexion->rollback();
            echo"Error";
        }
        
        unset($conexion);
        
        return $todoBien;
    }
    
    function cargarImagenProductos($pro, $ruta)
    {
        $todoBien = false;
        $conexion = $this->conexionPDO();
        
        $conexion->beginTransaction();
        
        $updatePlazas = $conexion->prepare('UPDATE productos SET codigo = :foto WHERE codigo = :pro');
        $updatePlazas->bindParam(':foto', $ruta, PDO::PARAM_STR);
        $updatePlazas->bindParam(':pro', $pro, PDO::PARAM_STR);
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
    
    
    function eliminarProducto($pro){
        
        $todoBien = false;
        $conexion = $this->conexionPDO();
        
        $conexion->beginTransaction();
        
        $updatePlazas = $conexion->prepare("DELETE FROM productos WHERE codigo=:pro");
        $updatePlazas->bindParam(':pro', $pro, PDO::PARAM_STR);
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
    
    
    function obtenerFamilias()
    {
        $listaFamilias = [];
        
        $conexion = $this->conexionPDO();
        
        $resultado = $conexion->query("SELECT codigo, nombre FROM familias");
        
        while ($familia = $resultado->fetch(PDO::FETCH_OBJ)) {
            array_push($listaFamilias, $familia);
        }
        
        return $listaFamilias;
    }
    
    function insertarProducto($cod, $nombre, $descrip, $precio, $familia)
    {
        $todoBien = false;
        
        $conexion = $this->conexionPDO();
        
        $conexion->beginTransaction();
        
        $insertProducto = $conexion->prepare('INSERT INTO productos (codigo, nombre, descripcion, precio, familia) VALUES (?,?,?,?,?)');
        $insertProducto->bindParam(1, $cod, PDO::PARAM_STR);
        $insertProducto->bindParam(2, $nombre, PDO::PARAM_STR);
        $insertProducto->bindParam(3, $descrip, PDO::PARAM_STR);
        $insertProducto->bindParam(4, $precio, PDO::PARAM_STR);
        $insertProducto->bindParam(5, $familia, PDO::PARAM_STR);
        
        $insertProducto->execute();
        $numeroProductosInsertados = $insertProducto->rowCount();
       
        
        
        if ($numeroProductosInsertados == 1) {
            $conexion->commit();
            echo"Los cambios se han hecho correctamente";
            $todoBien = true;
        } else {
            $conexion->rollback();
            echo "Error";
        }
        
        unset($conexion);
        
        return $todoBien;
    }
    
    function insertarComentarios($id, $usu, $producto, $coment)
    {
        $todoBien = false;
        
        $conexion = $this->conexionPDO();
        
        $conexion->beginTransaction();
        
        $insertProducto = $conexion->prepare('INSERT INTO comentarios (id, usu, product, comentario) VALUES (?,?,?,?)');
        $insertProducto->bindParam(1, $id, PDO::PARAM_STR);
        $insertProducto->bindParam(2, $usu, PDO::PARAM_STR);
        $insertProducto->bindParam(3, $producto, PDO::PARAM_STR);
        $insertProducto->bindParam(4, $coment, PDO::PARAM_STR);
        
        
        $insertProducto->execute();
        $numeroProductosInsertados = $insertProducto->rowCount();
        
        
        if ($numeroProductosInsertados == 1) {
            $conexion->commit();
            echo"Los cambios se han hecho correctamente";
            $todoBien = true;
        } else {
            $conexion->rollback();
            echo "Error";
        }
        
        unset($conexion);
        
        return $todoBien;
    }
    
    function obtener_comentarios_producto($pro)
    {
        $conexion = $this->conexionPDO();
        
        // BINDING CONSULTA
        $consulta = $conexion->prepare("SELECT c.id id, c.usu usu, c.comentario comentario FROM comentarios c INNER JOIN productos p ON c.product = p.codigo WHERE c.product = :pro");
        $consulta->bindParam(':pro', $pro, PDO::PARAM_STR);
        $consulta->execute();
        
        // VOLCAMOS EL RESULTADO EN UN ARRAY
        $resultado = [];
        while ($producto = $consulta->fetch()) {
            $resultado[$producto["id"]] = [
                "usu" => $producto["usu"],
                "comentario" => $producto["comentario"]];
        }
        
        
        
        // CERRAMOS CONEXIÓN
        unset($consulta);
        
        return $resultado;
    }
    
    function obtenerComentarioUsuario($pro)
    {
        $conexion = $this->conexionPDO();
        
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
        
        
        
        // CERRAMOS CONEXIÓN
        unset($consulta);
        
        return $resultado;
    }
    
    function eliminarComentarios($pro){
        
        $todoBien = false;
        $conexion = $this->conexionPDO();
        
        $conexion->beginTransaction();
        
        $deletecomment = $conexion->prepare("DELETE FROM comentarios WHERE product=:pro");
        $deletecomment->bindParam(':pro', $pro, PDO::PARAM_STR);
        $deletecomment->execute();
        $numeroDeleteComment = $deletecomment->rowCount();
        
        if ($numeroDeleteComment >= 1 ) {
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