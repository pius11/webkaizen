<?php

session_start(); 


$_SESSION = array();
$cookie = "cookie.php";

if (file_exists($cookie)) {
    unlink($cookie); 
}

session_destroy();


header("location: login.php");
exit;

?>