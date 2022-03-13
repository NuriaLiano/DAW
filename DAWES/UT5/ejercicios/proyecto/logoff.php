<?php 
include 'conexionBD.php';

session_start();
session_unset();
header("Location: login.php");

?>