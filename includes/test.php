<?php 
    include('includes/connection.php');
    session_start();    
    if(!isset($_SESSION['user_name'])){
        header("location: login.php");
    }
?>