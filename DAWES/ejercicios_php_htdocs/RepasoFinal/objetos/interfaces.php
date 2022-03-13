<?php

    /*
        - Todos los metodos tienen que ser pubiclos
        - puede tener constantes pero no atributos
        - los metodos en la interfaz van vacios si o si
        - se mete algo dentro del metodo cuando usas la interfaz

    */

    interface iInterfaz{
        public function interfaz();
    }

    //implementar

    class Profesor implements iInterfaz{
        public function interfaz(){
            echo "hola";
        }
    }
?>