<?php 

session_start();

require_once 'db_conn.php';

// echo $_SESSION['user_ic'];

if(!$_SESSION['user_ic']) {
	header('location: ../user_login.php');	
} 



?>