<!DOCTYPE html>
    <head>
        <title>Hoja03-03-01</title>
        <meta charset="UTF-8"></meta>
    </head>
    <body>
        <?php
        $array1 = [];
        $array2 = [];

            function cargarArray($elementos){ 
                               
                $array = [];

                for($i=0;$i<$elementos;$i++){
                    $num_aleatorio = rand(1,9);
                    $array[] = $num_aleatorio;
                                      
                }
                
                return $array;             
                
            }

            function mostrarArray($array){
            
                foreach($array as $valor){
                    echo $valor;
                }
                
            }

            //a la hora de ordenar crea una copia del array y es el que ordenar pero a la hora de llamar a la función llama al original, solucion: colocar &
            function ordenar(&$array){
                
                for($i=1;$i<count($array);$i++){

                    for($j=0;$j<count($array)-$i;$j++){

                        if($array[$j]>$array[$j+1]){

                            $k=$array[$j+1];
                            $array[$j+1]=$array[$j];
                            $array[$j]=$k;

                        }
                    }
                }
 
               return $array;
            }

            function mezclar($array1,$array2){ 

                foreach($array1 as $valor){
                    
                    $array2[] += $valor;
                }

                return $array2;

                //con merge
                
                /*$array3 = array_merge($array1,$array2);

                return $array3;*/

            }

            echo "<p>Cargamos el array 1</p>";            
            $array1 = cargarArray(10);
            echo mostrarArray($array1);            
            echo "<p>Cargamos el array 2</p>";
            $array2 = cargarArray(10);
            echo mostrarArray($array2);
            echo "<p>Mezclamos los arrays</p>";
            $array2 = mezclar($array1,$array2);
            echo mostrarArray($array2);
            echo "<p>Ordenamos el array</p>";
            ordenar($array2);
            echo mostrarArray($array2);

            //con merge

            /*$array3 = mezclar($array1,$array2);
            echo mostrarArray($array3);
            echo "<p>Ordenamos el array</p>";
            ordenar($array3);
            echo mostrarArray($array3);*/
        ?>
    </body>
</html>