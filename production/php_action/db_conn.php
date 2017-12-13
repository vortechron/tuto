<?php 	

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "sales";

// db connection
$con = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($con->connect_error) {
  die("Connection Failed : " . $con->connect_error);
} else {
  // echo "Successfully connected";
}

?>