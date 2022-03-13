<?php

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
    
     
}


function obtener_productos()
{
    $bd = new BD("localhost","dwes_04_tienda","root","");
    
    $conexion = $bd->conexionPDO();
    
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

?>