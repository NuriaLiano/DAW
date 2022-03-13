<?php
// pedir contrase�a al usuario de la base de datos
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm=Contenido restringido');
    header("HTTP/1.0 401 Unauthorized");
    echo "Usuario no reconocido";
    exit;
}
else {
    
    $dwes = new mysqli("localhost", "root", "", "dwes_03_funicular");
    $error = $dwes->connect_errno;
    // Si se estableci� la conexi�n
    if ($error == null) {
        date_default_timezone_set('Europe/Madrid');
        //comprueba si el usuario existe
        $sql = "SELECT usuario FROM usuarios WHERE usuario='${_SERVER['PHP_AUTH_USER']}' AND  password=('${_SERVER['PHP_AUTH_PW']}')";
        $resultado = $dwes->query($sql);
        // Si no existe, se vuelven a pedir las credenciales
        if ($resultado->num_rows == 0) {
            header('WWW-Authenticate: Basic realm="Contenido restringido"');
            header("HTTP/1.0 401 Unauthorized");
            exit;
        } else {
            //iniciar la sesion
            session_start();
            
            //si existe la sesion contador la aumenta en 1 si no existe comienza en 1
            if( isset( $_SESSION['contador'] ) ) {
                $_SESSION['contador'] += 1;
            }else {
                $_SESSION['contador'] = 1;
            }
            //imprimir las veces que se ha visitado 
            $visitas = "Ha visitado esta pagina ".  $_SESSION['contador'] . " veces" ;
            //impirmir el mensaje
            echo "<p>$visitas</p>";
            
            //almacenar la fecha de las visitas
            $fecha_ahora = new DateTime();
           
            //comprueba si la sesion esta vacia o no
            //si esta vacia muestra el mensaje y crea una sesion con la fecha de la visita
            //si la sesion tiene contenido agrega la fecha y hora actual e imprime el mensaje
            if(empty($_SESSION['ultimo_login'])) {
                echo "<p> No hay historial por que no has accedido antes</p>";
                $_SESSION['ultimo_login'] = $fecha_ahora->format('d-m-Y H:i:s');
            }else if (isset($_SESSION['ultimo_login'])) {
                $_SESSION['ultimo_login'] = $fecha_ahora->format('d-m-Y H:i:s');
                echo "<p>La ultima visita a esta pagina es de ".$_SESSION['ultimo_login']."</p>" ;
                

            }
        }
        $resultado->close();
        $dwes->close();
    }
}
?>
    <html>

    <head>
        <title>Ejercicio sesiones</title>
    </head>

    <body>
        <?php
        
        if ($error == null) {
            echo "Nombre de usuario: " . $_SERVER['PHP_AUTH_USER'] . "<br />";
            echo "Hash de la contrase�a: " . md5($_SERVER['PHP_AUTH_PW']) . "<br />";
            if (isset($ultimo_login)) echo "Ultimo login: " . date("d/m/y \a \l\a\s H:i", $ultimo_login);
            else echo "Bienvenido. Es la primera visita a mi pagina wweb .";
        } else echo "Se ha producido el error $error.<br />";
        ?>
   </body>

    </html>