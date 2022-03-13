<?php

    /*
    - Modelo: Objetos, funciones BBDD y funciones 
    - Vista: solo HTML con Jquery
    - Controlador: Funciones de interaccion con usuario y PHP con if isset post['enviar'] | une vista y modelo

    estructura:
        controlador
            - controlador.php
        vista
            - vista.php
        modelo
            - modelo.php
        index.php

    Es necesario tener una carpeta con componentes donde almacenar en carpetas subdivididas en modelo, vista y controlador
    la estructura genera:

        componentes
            - productos
                - controlador
                    - controlador.php --> funciones de interaccion con usuarios
                - vista
                    - vista.php --> HTML y Jquery
                - modelo
                    - modelo.php --> funcionesBBDD, funciones y objetos
            - commons
                - footer.php
                - header.php
        css
        img
        js
        includes
            - basedatos.class.php --> base de datos
            - framework.php --> fichero con código para hacer funcionar el modelo
        index.php --> Recibe las solicitudes del usuario mediante una URL conteniendo un parámetro con la sección a cargar, similar a la siguiente:

        http://localhost/mvc/index.php?controller=note&action=list
        Llamaremos al archivo index.php, pasándole como parámetros el nombre del controlador y la acción que necesitamos.
    
    
    */


?>