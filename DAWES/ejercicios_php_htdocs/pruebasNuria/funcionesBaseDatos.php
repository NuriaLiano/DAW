<?php 
    
    include 'conexionBD.php';
    //include 'conexionBDPDO.php';

    function guardarLibros() {
        //con transacciones
        
        $conexion = getConnexion();
        
        $todoOK = true;
        
        $titulo = $_POST['introTitulo'];
        $ano = $_POST['introAno'];
        $precio = $_POST['introPrecio'];
        $fecha = $_POST['introFecha'];
        
        $conexion->beginTransaction();
        $sql = 'INSERT INTO libros (titulo,ano_edicion,precio,fecha_adquisicion) VALUES ("'.$titulo.'", "'.$ano.'", "'.$precio.'", "'.$fecha.'")';
        if ($conexion->exec($sql) == 0)$todoOK = false;
        
        if ($todoOK == true){
            $conexion->commit();
            echo "<h2>Libro anadido con exito</h2>";
        }else{
            $conexion->rollback();
            echo "<h2>Fallo al anadir libro</h2>";
        }
        
        return $todoOK;
        
    }
    
    function guardarLibrosPDO() {
        //con transacciones
        
        $conexion = getConnexion();
        
        $todoOK = true;
        
        $titulo = $_POST['introTitulo'];
        $ano = $_POST['introAno'];
        $precio = $_POST['introPrecio'];
        $fecha = $_POST['introFecha'];
        
        $conexion->autocommit(false);
        $sql = 'INSERT INTO libros (titulo,ano_edicion,precio,fecha_adquisicion) VALUES ("'.$titulo.'", "'.$ano.'", "'.$precio.'", "'.$fecha.'")';
        if ($conexion->query($sql) != true)$todoOK = false;
        
        if ($todoOK == true){
            $conexion->commit();
            echo "<h2>Libro anadido con exito</h2>";
        }else{
            $conexion->rollback();
            echo "<h2>Fallo al anadir libro</h2>";
        }
        
        return $todoOK;
       
    }
    function verLibros() {
        $conexion = getConnexion();
        $resultado = $conexion->query('SELECT * FROM libros');
        $conexion -> close();
        return $resultado;
    }
    /*function verPrecioBorrado($id) {
        $conexion = getConnexion();
        $resultado = $conexion->query('SELECT precio FROM libros WHERE id='.$id);
        $conexion -> close();
        return $resultado;
    }*/
    
    function borrarLibros($id) {
        $conexion = getConnexion();
        $sql = "DELETE FROM libros WHERE id =".$id;
        $resultado = $conexion->query($sql);
        echo $conexion->affected_rows;
        //return $resultado;
    }







?>