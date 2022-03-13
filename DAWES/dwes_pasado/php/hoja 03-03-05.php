<!DOCTYPE html>
    <head>
        <title>Hoja03-03-05</title>
        <meta charset="UTF-8"></meta>
    </head>
    <body>
    <?php
        $articulos = [ 
            ["codigo"=>"AXE4","descripcion"=>'aparato de última tecnología',"existencias"=>4000],
            ["codigo"=>'BID4',"descripcion"=>'aparato dos de última tecnología',"existencias"=>200],
            ["codigo"=>'CIR5',"descripcion"=>'aparato tres de última tecnología',"existencias"=>260],
            ["codigo"=>'PIC6',"descripcion"=>'aparato cuatro de última tecnología',"existencias"=>9000]
        ];

        
        function mayor($articulos){

            $mayor = null;

            foreach($articulos as $articulo){


                if($mayor){

                    if($articulo['existencias']>$mayor['existencias']){

                        $mayor = $articulo;
                    }


                }else{

                    $mayor = $articulo;
                }
            
               
            }

            return $mayor;
            
        }

        function sumar($articulos){

            $existencias_totales = 0;

            foreach($articulos as $articulo){

                $existencias = $articulo['existencias'];                
                
                $existencias_totales += $existencias;
                
            }
            return $existencias_totales;

        }
        function mostrar($articulos){

            $articulo_mostrar = "";

            foreach($articulos as $articulo){  

                $articulo_mostrar = $articulo_mostrar . "Codigo: " . $articulo['codigo'] ." Descripcion: " .$articulo['descripcion'] ." Existencias: " .$articulo['existencias'] ."<br>" ;
               
            }

            return $articulo_mostrar;
        }

        echo "La suma total de las existencias es : " .sumar($articulos);
        echo "Articulo: " .mostrar($articulos);
        echo "El articulo con mas existecias es: " .mayor($articulos)['codigo'];
    ?>
    </body>
</html>