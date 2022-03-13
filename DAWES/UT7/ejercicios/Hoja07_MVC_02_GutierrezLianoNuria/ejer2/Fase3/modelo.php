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
        
        // CERRAMOS CONEXI�N
        unset($consulta);
        
        return $resultado;
    }
    
    
    
}
?>

    
    
    
