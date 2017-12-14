<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sales";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


var_dump($_POST);
exit;

	$vehicle_type = $_POST['vehicle_type'];
    $vehicle_model = $_POST['vehicle_model'];
    $plat_num = $_POST['plat_num'];

$sql = "UPDATE vehicle SET vehicle_type ='$vehicle_type' , vehicle_model ='$vehicle_model' WHERE plat_num ='$plat_num'";

if ($conn->query($sql) === TRUE) {
	  echo "<script>alert('Record updated successfully')</script>";
               echo "<script>location.href='../user_vehicle.php'</script>";
            }
          else {
               echo "<script>alert('Error updating record: ')</script>" . $conn->error;
               echo "<script>location.href='../edit_vehicle_action.php'</script>";
            }
  

$conn->close();
?>