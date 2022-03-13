<?php 
   function getConexionPDO() {
       $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $conexion = new PDO('mysql:host=localhost;dbname=dwes_03_funicular', 'root', '' , $opciones);
        return $conexion;
        unset($conexion);
       
   }
    //getConexion();
    
   function login ($usuario, $passwd){
       $resultado = false;
       $conexion = getConnexion();
       $consulta = $conexion ->stmt_init();
       
       $consulta=$conexion ->prepare('SELECT password FROM usuarios WHERE usuario = ?');
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
   function registrarUsuario($usuario, $passwd) {
       $consulta = false;
       $conexion = getConexionPDO();
       $sql = "INSERT INTO logins (usuario, passwd) VALUES (?,?)";
       
       $resultado= $conexion->prepare($sql);
       
       if($resultado->execute($usuario, $passwd)) {
           $consulta = true;
       };
       return $consulta;
       
   }
   function registrarAplicacion($nombreApp, $desc) {
       $consulta = false;
       $conexion = getConexionPDO();
       $sql = "INSERT INTO logins (usuario, passwd) VALUES (?,?)";
       
       $resultado= $conexion->prepare($sql);
       
       if($resultado->execute($nombreApp, $desc)) {
           $consulta = true;
       };
       return $consulta;
       
   }
   
   function verUsuarios()
   {
       $conexion = getConexionPDO();
       $resultado = $conexion->query('SELECT * FROM usuarios');
       $usuarios = [];
       while ($us = $resultado->fetch()) {
           $usuarios[] = [
               'nombre_usuario' => $us['nombre_usuario'],
               'nombre_real' => $us['nombre_real']
           ];
       }
       
       unset($conexion);
       return $libros;
   }
   
   function borrarUsuario($usuario)
   {
       $conexion = getConexionPDO();
       $conexion->exec("DELETE FROM logins WHERE usuario = " . $usuario);
       unset($conexion);
   }
   function borrarAplicacion($nombreApp)
   {
       $conexion = getConexionPDO();
       $conexion->exec("DELETE FROM aplicaciones WHERE nombre_aplicacion = " . $nombreApp);
       unset($conexion);
   }
   
   

?>