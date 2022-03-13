<!DOCTYPE html>
<!--Autor: Nuria Gutiérrez Liaño-->
<html>
    <?php 
        $mi_booleano=false;
        $mi_entero=0x2A;
        $mi_real=7.3e-1;
        $mi_cadena="hola";
        $mi_cadena2="esto es php";
        $mi_variable=null;
        $mi_entero=3;
        $mi_real=2.3;
        $resultado=$mi_entero+$mi_real;
    ?>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
	   <h1>Ejemplo de variables:</h1>
	   <?php
		 print("boolean =". $mi_booleano );
		 echo "</br>";
		 print("entero = ". $mi_entero);
		 echo "</br>";
		 print("mi_real = ". $mi_cadena);
		 echo "</br>";
		 print("cadena = ". $mi_cadena." ".$mi_cadena2);
		 echo "</br>";
		 print("variable = ". $mi_variable);
		 echo "</br>";
		 print("entero = ".$mi_entero);
		 echo "</br>";
		 print("real = ". $mi_real);
		 echo "</br>";
		 print("resultado = ".$resultado);
		?>
    </body>
</html>
