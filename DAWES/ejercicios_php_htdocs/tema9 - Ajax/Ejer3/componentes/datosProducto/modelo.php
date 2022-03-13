<?php 

include_once 'includes/BaseDatos.class.php';
class Producto
{
    
    protected $codigo;
    
    protected $nombre;
    
    protected $descripcion;
    
    protected $precio;
    
    protected $familia;
    
    public function __construct($codigo, $nombre, $descripcion,  $precio, $familia)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->familia = $familia;
    }
    
    
    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    
    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    
    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }
    
    /**
     * @return mixed
     */
    public function getFamilia()
    {
        return $this->familia;
    }
    
    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    
    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    
    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    
    /**
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    
    /**
     * @param mixed $familia
     */
    public function setFamilia($familia)
    {
        $this->familia = $familia;
    }
    
    public static function obtener_producto($pro)
    {
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
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
    
    public static function obtener_comentarios_producto($pro)
    {
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
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
    
    public static function mod_producto($codViejo,$cod, $nombre, $descrip, $precio)
    {
        $todoBien = false;
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
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
    
    public static function cargarImagenProductos($pro, $ruta)
    {
        $todoBien = false;
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
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
    
    public static function eliminarProducto($pro){
        
        $todoBien = false;
        
        $bbdd = new BD();
        
        $conexion = $bbdd->conexionPDO();
        
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
    
}

?>






