<?php 

   session_start();
   
   function loader($componente){
       
       ob_start();
       include 'componentes/'.$componente.'/controlador.php';
       $buffer = ob_get_clean();
       return $buffer;
   }
   
   
   if(isset($_GET['option'])){
       
        $componente = $_GET['option'];
   }else{
       
       $componente = "login";
   }
?>