<?php    
session_start();
unset($_SESSION["check_login"]);
header("location:index.php");
?>