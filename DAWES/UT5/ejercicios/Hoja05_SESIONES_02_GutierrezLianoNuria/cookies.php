<?php
// pedir contrase�a al usuario de la base de
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm=Contenido restringido');
    header("HTTP/1.0 401 Unauthorized");
    echo "Usuario no reconocido";
    exit;
}
else {
    
    $dwes = new mysqli("localhost", "root", "usuarioalumno123", "dwes_03_funicular");
    $error = $dwes->connect_errno;
    // Si se estableci� la conexi�n
    if ($error == null) {
        date_default_timezone_set('Europe/Madrid');
        // Ejecutamos la consulta para comprobar si existe
        //  esa combinaci�n de usuario y contrase�a
        $sql = "SELECT usuario FROM usuarios WHERE usuario='${_SERVER['PHP_AUTH_USER']}' AND  password=('${_SERVER['PHP_AUTH_PW']}')";
        $resultado = $dwes->query($sql);
        // Si no existe, se vuelven a pedir las credenciales
        if ($resultado->num_rows == 0) {
            header('WWW-Authenticate: Basic realm="Contenido restringido"');
            header("HTTP/1.0 401 Unauthorized");
            exit;
        } else {
            if (isset($_COOKIE['ultimo_login'])) {
                $ultimo_login = $_COOKIE['ultimo_login'];
            }
            setcookie("ultimo_login", time(), time() + 3600);
        }
        $resultado->close();
        $dwes->close();
    }
}
?>
<!DOCTYPEhtml PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Ejemplo Tema 4: Cookies en autentificaci�n HTTP</title>
        <link href="dwes.css" rel="stylesheet" type="text/css">
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
