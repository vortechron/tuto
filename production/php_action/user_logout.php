<?php 

require_once 'user_session.php';

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header('location: ../user_login.php');

?>