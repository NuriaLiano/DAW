<?php 
    include_once 'ejer1.php';

    $sueldoBase = 1000;
    //crear Empleado
    $nuevoEmpleado = new Empleado ($sueldoBase);
   //Crear Encargado
    $nuevoEncargado = new Encargado ($sueldoBase);
    
   print "El sueldo del empleado es: ". $nuevoEmpleado->getSueldo() ." eurucos <br/> El sueldo del encargado es: ". $nuevoEncargado->getSueldo() . " eurucos";
   
   
   ?>