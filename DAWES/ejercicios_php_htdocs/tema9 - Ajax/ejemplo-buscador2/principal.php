<?php

session_start();
//establece el valor de uan directiva de configuracion
//"display_errors" es una variable que esta en
//true es el nuevo valor para la variable
ini_set("display_errors",true);

//llama a la vista del php donde esta el buscador
include_once("vistas/principal.php");
