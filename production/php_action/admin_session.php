<?php 

session_start();

require_once 'db_conn.php';

// echo $_SESSION['user_ic'];

if(!$_SESSION['admin_id']) {
	header('location: ../admin_login.php');	
} 



?>