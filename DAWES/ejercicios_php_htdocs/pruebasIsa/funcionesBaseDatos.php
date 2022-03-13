<?php 
include 'conexionBD.php';

function mostrarlibros(){
   
    // Check connection
     $conn = getConnexion();
    
    $sql = "SELECT * FROM libros";
    $result = $conn->query($sql);
    
    $conn->close();
    
    return $result;
}

function borrarlibros($id){
    $conn = getConnexion();
    
    $sql = "DELETE FROM libros where id = " .$id;
    
    $libros  = $conn->query($sql);
    echo $conn->affected_rows;
}



?>