<?php 
    //variables
    $date1 = date_create("1998-04-22");
    $date2 = date_create("2021-09-27");

    $dif = date_diff($date1, $date2);
    
    echo $dif -> days." days";
?>
