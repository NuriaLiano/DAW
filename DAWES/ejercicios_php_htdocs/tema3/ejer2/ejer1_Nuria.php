<?php 
    function fecha_espa (){
        setlocale(LC_TIME, "spanish");
        return strftime("%A, %d de %B de %Y").'<br/>';
    }
?>