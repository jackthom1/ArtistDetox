<?php 
    include("./header.php");
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: /index.php"); 
    exit;

?>