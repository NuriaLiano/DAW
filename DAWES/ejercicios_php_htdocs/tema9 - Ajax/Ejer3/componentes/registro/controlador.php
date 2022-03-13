                 <?php
                 require_once 'includes/BaseDatos.class.php';
                 require_once 'modelo.php';

                // ACCESO
                if (isset($_POST["regis"])) {
                    // Obtenemos el usuario, la contrase�a y su confirmaci�n
                    $nombre_usuario = $_POST["usuario"];
                    $password = $_POST["password"];
                    $confirmar_password = $_POST["confirmar_password"];

                    // Calculamos el hash MD5
                    $hash_password = md5($password);

                    if ($password == $confirmar_password) {

                        if(registrar($nombre_usuario, $hash_password, "rutaFoto")){
                             // Llevamos al usuario a la p�gina
                        header("Location: index.php?option=login");
                            
                        }
                       
                    }
                }
                // FIN ACCESO
                require_once 'vista.php';
                ?>