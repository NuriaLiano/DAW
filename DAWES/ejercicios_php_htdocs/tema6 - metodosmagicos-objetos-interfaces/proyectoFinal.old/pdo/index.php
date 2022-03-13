<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login de usuarios</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos_index.css">

    <!-- JavaScript -->
    <script src="js/funcionesTienda.js"></script>
</head>

<body>
    <!-- Acceso -->	
        <div class="login">
            <div class="login-caja">
                <form name="reservar" action="" method="POST">
                <div class="login-titulo">
                    <h2>Login de usuarios</h2>
                </div>
                <div class="login-form">
                    <div class="login-inputs">
                        <input type="text" class="login-field" id="buscador" name="usuario" placeholder="Introduce tu usuario" require>
                        <label class="login-field-icon fui-user" for="login-name"></label>    
                    </div>
                    <div class="login-inputs">
                        <input type="password" class="login-field" id="buscador" name="password" placeholder="Introduce tu password" require>
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    <input type="submit" name="login" value="Login" class="btn">
                    
                    <a href="registro.php" class="btn-rg">Registro</a>
                </div>
                <!-- Pie -->
        <footer class="pie">
            &copy; I.E.S. Miguel Herrero
        </footer>
        <!-- Fin pie -->
                </form>
            </div>
        </div>
                <!-- Fin botonera -->

                <!-- Control de usuarios -->
                    <?php
                    require_once 'BD.php';
                    require_once 'usuario.php';
                    
                    $bbdd = new BD("localhost","dwes_04_tienda","root","");
                    
                    // ACCESO
                    if (isset($_POST["login"])) {
                        
                        $usuario = $_POST["usuario"];
                        $pass = $_POST["password"];
                        
                        $passmd = md5($pass);
                        
                        $lista = $bbdd->autenticar();
                        
                       
                        foreach ($lista as $key) {
                            
                            $usu = new Usuario($key->usuario, $key->password, $key->foto);
                          
                            if($usuario == $usu->getUsuario() && $passmd == $usu->getPassword()){                            
                                
                                session_start();
                                $_SESSION["usuario"] = $usuario;
                                header("Location: productos.php");
                               
                            }
                                                      
                        }                       
                       
                    }
                    // FIN ACCESO
                    ?>

        
    </div>
    <!-- Fin acceso -->
</body>

</html>