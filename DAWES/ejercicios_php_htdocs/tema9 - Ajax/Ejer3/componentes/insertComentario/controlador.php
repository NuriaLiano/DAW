 <?php
                 require_once 'includes/BaseDatos.class.php';
                 require_once 'modelo.php';

                 if (isset($_POST["insertar"])) {
                     
                     $id = rand(1,10000);
                     
                     $usu = $_SESSION["usuario"];
                     
                     $producto =  $_SESSION["productoConcreto"];
                     
                     $comentario = $_POST["comentario"];
                     
                     if(insertarComentarios($id,$usu,$producto,$comentario)){
                         // Llevamos al usuario a la p�gina
                         header("Location: index.php?option=productos");
                         
                     }                  
                 }
                 
                 if (isset($_POST["seguirComprando"])) {
                     
                     header("Location: index.php?option=productos");
                 }
                 
                
                 
                 
                 

                // FIN ACCESO
                require_once 'vista.php';
                ?>