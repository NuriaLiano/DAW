<?php
function getConexion(){
    $localhost="localhost";
    $usuario="root";
    $contraseña="";
    $bbdd="dwes_02_libros";
    
    $conexion = new mysqli($localhost, $usuario , $contraseña, $bbdd);
    
    if(!$conexion){
        echo "error $conexion->connect_errno";
    }else{
        return $conexion;
    }
}

function insertarLibro() {
    $conexion = getConexion();
    $todoOk = true;
    $titulo = $_POST['titulo'];
    $ano = $_POST['anoEdicion'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fechaAdq'];
    $conexion->autocommit(false);  
    $sql = 'INSERT INTO libros (titulo,ano_edicion,precio,fecha_adquisicion) VALUES ("'.$titulo.'", "'.$ano.'", "'.$precio.'", "'.$fecha.'")';
    if ($conexion->query($sql) != true) $todoOk = false;
    
    if ($todoOk == true){
        $conexion->commit();
        print "Libro añadido con exito";
    }else{
        $conexion->rollback();
        print "Fallo al añadir libro";
    }
}

function mostrarLibros(){ 
    $conexion = getConexion(); 
    $sql = "SELECT * FROM libros";
    $resultado = $conexion->query($sql);    
    $conexion->close();    
    return $resultado;
}

function borrarLibros($ejemplar){  
    $conexion = getConexion();   
    $sql = "delete from libros where ejemplar = " . $ejemplar;  
    $resultado  = $conexion->query($sql);   
    echo $conexion->affected_rows;
}
