<?php
    session_start();
    session_destroy();
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
    $_SESSION["message"]= "You are logged out";
    
    header("location: login.php");
?>