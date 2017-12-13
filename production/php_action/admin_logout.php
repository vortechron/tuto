<?php 

require_once 'admin_session.php';

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header('location: ../admin_login.php');

?>