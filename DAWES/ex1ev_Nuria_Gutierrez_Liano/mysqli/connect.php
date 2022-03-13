<?php 
    //conexion a la bbdd
    function getConnexion() {
        $conexion = new mysqli('localhost', 'root', '', 'usuario_aplicaciones');
        $conexion->set_charset("utf-8");
        $error = $conexion->connect_errno;
        
        if ($error != null) {
            print "<p> Se ha producido el error: $conexion->connect_error.</p>";
            exit();
        } else {
            //print "hola, te has conectado correctamente";
        }
        return $conexion;
    }
    function login ($usuario, $passwd){
        $resultado = false;
        $conexion = getConnexion();
        $consulta = $conexion ->stmt_init();
        
        $consulta->prepare('SELECT password FROM usuarios WHERE usuario = ?');
        $consulta->bind_param('s', $usuario);
        $consulta->execute();
        $consulta->bind_result($pass);
        while ($consulta->fetch()) {
            if ($pass == $passwd) {
                $resultado = true;
                break;
            }
        }
        $consulta->close();
        
        return $resultado;
    }


    //comprobar usuario en login
    /*function comprobarUsuario($usuario, $passwd) {
        $conexion = getConnexion();
        $resultado = $conexion->query("SELECT * FROM login WHERE usuario='".$usuario."'AND'".$passwd."'");
        $conexion -> close();
        return $resultado;
        
    }*/

    function registrarUsuario($usuario, $passwd){

        //conexion a la bbdd
        $conexion = getConnexion();
        $comprobacion = true;
        $conexion->autocommit(false);
        
        //INSERTAR CON CONSULTAS PREPARADAS
        $stmt=$conexion->prepare("INSERT INTO logins (usuario, passwd) VALUES (?,?)");
        
        $stmt->bind_param("ss", $usuario, $passwd); //ss representa la cantidad de datos que queremos añadir
        
        $stmt->execute();
        echo "<p>SE HA REALIZADO CORRECTAMENTE</P>";
        //cerrar
        $stmt ->close();
        
        //comprobar que ha salido bien y mostrar mensaje
        if ($comprobacion == true)
        {
            $conexion->commit();
            print "<p>Los campos se han insertado correctamente.</p>";
        }
        else {
            $conexion->rollback();
            print "<p>NO SE HAN REALIZADO LOS CAMBIOS.</p>";
        }
        
    }
    
    function registrarAplicacion($nombreApp, $desc){
        
        //conexion a la bbdd
        $conexion = getConnexion();
        $comprobacion = true;
        $conexion->autocommit(false);
        
        //INSERTAR CON CONSULTAS PREPARADAS
        $stmt=$conexion->prepare("INSERT INTO logins (usuario, passwd) VALUES (?,?)");
        
        $stmt->bind_param("ss", $nombreApp, $desc); //ss representa la cantidad de datos que queremos añadir
        
        $stmt->execute();
        echo "<p>SE HA REALIZADO CORRECTAMENTE</P>";
        //cerrar
        $stmt ->close();
        
        //comprobar que ha salido bien y mostrar mensaje
        if ($comprobacion == true)
        {
            $conexion->commit();
            print "<p>Los campos se han insertado correctamente.</p>";
        }
        else {
            $conexion->rollback();
            print "<p>NO SE HAN REALIZADO LOS CAMBIOS.</p>";
        }
        
    }

    //ver usuarios
    function verUsuarios() {
        $conexion = getConnexion();
        $resultado = $conexion->query('SELECT * FROM usuarios');
        $conexion -> close();
        return $resultado;
    }
    
    function verAplicaciones() {
        $conexion = getConnexion();
        $resultado = $conexion->query('SELECT * FROM aplicaciones');
        $conexion -> close();
        return $resultado;
    }

    function borrarUsuario($usuario) {
        $conexion = getConnexion();
        $sql = "DELETE FROM logins WHERE usuario =".$usuario;
        $resultado = $conexion->query($sql);
        echo $conexion->affected_rows;
        //return $resultado;
    }
    
    function borrarAplicacion($nombreApp) {
        $conexion = getConnexion();
        $sql = "DELETE FROM aplicaciones WHERE nombre_aplicacion =".$nombreApp;
        $resultado = $conexion->query($sql);
        echo $conexion->affected_rows;
        //return $resultado;
    }




?>


