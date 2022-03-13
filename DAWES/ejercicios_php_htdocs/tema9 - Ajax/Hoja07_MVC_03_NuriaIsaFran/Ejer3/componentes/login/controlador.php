<?php
require_once 'includes/BaseDatos.class.php';
require_once 'modelo.php';


// ACCESO
if (isset($_POST["login"])) {

    $usuario = $_POST["usuario"];
    $pass = $_POST["password"];

    $passmd = md5($pass);

    $lista = Login::autenticar();

    foreach ($lista as $key) {

        $usu = new Login($key->usuario, $key->password, $key->foto);

        if ($usuario == $usu->getUsuario() && $passmd == $usu->getPassword()) {

            session_start();
            $_SESSION["usuario"] = $usuario;
            header("Location: index.php?option=productos");
        }
    }
}

if(isset($_POST["registro"])) {
    
    header("Location: index.php?option=registro");
}
// FIN ACCESO

require_once 'vista.php';

?>