
    <?php
    class circulo {
        private $radio;
        public function __construct(){
            // $this->radio;
        }
        /* public function setRadio($nuevoRadio){
         $this->radio = $nuevoRadio;
         }
         public function getRadio(){
         print $this->radio;
         } */
        public function __get($var){
            if (property_exists(__CLASS__, $var)) {
                return $this->$var;
            }
            return NULL;
        }
        
        
        public function __set($var,$valor){
            if (property_exists(__CLASS__, $var)) {
                $this->$var = $valor;
            } else {
                echo "No existe el atributo $var.";
            }
        }
        
        public function mostrar(){
            echo "el radio es ".$this->radio;
        }
    }

?>