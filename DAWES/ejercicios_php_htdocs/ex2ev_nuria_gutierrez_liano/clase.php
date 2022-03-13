<?php
    class Clase{
        private $id;
        private $letra;
        
        public function __construct($id, $letra){

            if($id == 1 || $id == 0){
               $this->id = $id; 
            }else{
                echo "<script>alert('Introduce solo un 1 o un 0');</script>";
            }
            if($letra == "A" || $letra == "B"){
                $this->letra = $letra; 
             }else{
                 echo "<script>alert('Introduce solo una A o una B');</script>";
             }

        }

        public function getId(){
            return $this->id;
        }
        public function getLetra(){
            return $this->letra;
        }



    }
?>