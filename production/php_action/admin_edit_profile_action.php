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

  $admin_name = $_POST['admin_name'];
  $admin_id = $_POST['admin_id'];
  $admin_email = $_POST['admin_email'];
  $admin_pass = $_POST['admin_pass'];

$sql = "UPDATE admin SET admin_name ='$admin_name' , admin_email ='$admin_email', admin_pass ='$admin_pass' WHERE admin_id ='$admin_id'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record updated successfully')</script>";
               echo "<script>location.href='../admin_profile.php'</script>";
            }
          else {
               echo "<script>alert('Error updating record: ')</script>" . $conn->error;
               echo "<script>location.href='../admin_profile.php'</script>";
            }
  

$conn->close();
?>