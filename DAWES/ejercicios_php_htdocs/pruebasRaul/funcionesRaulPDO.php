<?php

function getConexionPDO(){
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $conexion = new PDO('mysql:host=localhost;dbname=dwes_02_libros', 'root', 'usuarioalumno123' , $opciones);
    return $conexion;
}

function insertarLibro($datosLibros) {
    $consulta = false;
    $conexion = getConexionPDO();
    $sql = "INSERT INTO libros (titulo,ano_edicion,precio,fecha_adquisicion) VALUES (?,?,?,?)";
    
    $resultado= $conexion->prepare($sql);
    
    if($resultado->execute($datosLibros)) {
        $consulta = true;
    };    
    return $consulta;
    
}

function getLibros(){
    $conexion = getConexionPDO();
    $resultado = $conexion->query('SELECT * FROM libros');
        while ($libro = $resultado->fetch()){
            echo "<tr>";
             echo "<td>" . $libro['ejemplar'] . "</td>";
             echo "<td>" . $libro['titulo'] . "</td>";
             echo "<td>" . $libro['ano_edicion'] . "</td>";
             echo "<td>" . $libro['precio'] . "€</td>";
             echo "<td>" . $libro['fecha_adquisicion'] . "</td>";
             echo "</tr>";
        }
    $resultado= null;
}


function mostrarLibros(){ 
    /*$conexion = getConexionPDO();    
    $resultado = $conexion->query('SELECT * FROM libros');
    if ($resultado) {
        while ($libro = $resultado->fetch() != null){
            
            //$libros[] = $libro;
            /*echo "<tr>";
             echo "<td>" . $libro['ejemplar'] . "</td>";
             echo "<td>" . $libro['titulo'] . "</td>";
             echo "<td>" . $libro['ano_edicion'] . "</td>";
             echo "<td>" . $libro['precio'] . "€</td>";
             echo "<td>" . $libro['fecha_adquisicion'] . "</td>";
             echo "</tr>";*/
       /*}
    }
    return $libros;*/
    $conexion = getConexionPDO();
    $query = $conexion->prepare("SELECT * FROM libros");
    $query->execute();
    $data = $query->fetchAll();
    
    return $data;
}

function borrarLibros($ejemplar){  
    $conexion = getConexionPDO();   
    $resultado = $conexion->exec("DELETE FROM libros WHERE ejemplar = ". $ejemplar.";");  
}

?>
