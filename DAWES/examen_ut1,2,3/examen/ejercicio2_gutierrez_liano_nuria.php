<?php 
    
   $num = array();
    
    function generar_array($bajo, $alto) {
        global $num;
        echo "Generamos el array aleatorio entre ". $bajo . " y ". $alto. " de longitud 7 <br/>";
        for ($i = 1; $i <= 7; $i++) {
            $aleatorio = rand($bajo,$alto);
            array_push($num, $aleatorio);
            echo $aleatorio . " ";
            
        }
       echo "<br/>";
       
    }
    
    function ordenar() {
        global $num;
        sort($num);
        
        echo var_export($num). "El array ordenado es: <br/>" ;
        
        echo "<br/>";
    }
    function num_max() {
        global $num;
        /*for ($i = 1; $i < 7; $i++) {
            $temporal = $num[$i];
            $temporal2 = 0;
            if ($temporal >= $temporal2) {
                $temporal += $temporal2;
                echo "es mayor";
            }else if ($temporal <= $temporal2){
                $temporal += $temporal2;
                echo "es mayor";
            }else if ($temporal == $temporal2){
                $temporal += $temporal2;
                echo "es igual";
            }
            
        }*/
        
        echo "<br/>";
    }
    function media (){
        global $num;
        $total = 0;
        for ($i = 1; $i < 7; $i++) {
            $temp = 0;
            $temp = $num[$i];
            $total += $temp;
        }
        echo "La media del array es: <br/>". $total /7;
    }
    function inserccion ($numero){
        global $num;
        for ($i = 0; $i < 7; $i++) {
           array_push($num, $numero);
           
        }
        echo "Insertamos el numero: ". $numero. "<br/>";
        print_r($num);
    }

?>