<?php 
session_start(); 

// Unset or clear any session variables or tokens
session_unset();

// Destroy all sessions 
session_destroy(); 

// Redirect to login page 
header("Location: login.html"); 
exit; 
?>
