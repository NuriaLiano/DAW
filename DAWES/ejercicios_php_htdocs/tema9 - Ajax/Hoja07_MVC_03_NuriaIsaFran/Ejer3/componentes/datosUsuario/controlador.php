<?php
require_once 'includes/BaseDatos.class.php';
require_once 'modelo.php';

global $usuario,$listaComentarios;

$nombre_usuario = $_SESSION["usuario"];    

$usuario = Usuario::obtener_usuario($nombre_usuario);
$listaComentarios = Usuario::obtenerComentarioUsuario($nombre_usuario);

		if (isset($_POST["modificar"])) {
		    
		    $nuevoUsu = $_POST["usu"];
		    $nuevaContra = $_POST["contra"];
		    
		    $passmd = md5($nuevaContra);
		    
		    if(Usuario::mod_usuario($nombre_usuario,$nuevoUsu ,$passmd)){
		        // Llevamos al usuario a la p�gina
		        header("Location: index.php?option=login");
		        
		    }   	    		   
		}
		
		if (isset($_POST["cargarImg"])) {
		     
		    $ruta = $_POST["img"];
		    
		    if(Usuario::cargarImagen($nombre_usuario,$ruta)){
		        // Llevamos al usuario a la p�gina
		        header("Location: index.php?option=datosUsuario");
		        
		    }   		  
		}
		
		if (isset($_POST["seguirComprando"])) {
		    
		    header("Location: index.php?option=productos");
		}
		
		if (isset($_POST["borrarUsuario"])) {
		    
		    if(Usuario::eliminarUsuario($nombre_usuario)){
		        // Llevamos al usuario a la p�gina
		        header("Location: index.php?option=login");
		        
		    }   		  
		}

		if (isset($_POST['borrarComentario'])) {
		    
		    if(Usuario::eliminarComentariosUsuario($nombre_usuario)){
		        // Llevamos al usuario a la p�gina
		        header("Location: index.php?option=datosUsuario");
		        
		    }  			
		}
		
		require_once 'vista.php';
		
		?>