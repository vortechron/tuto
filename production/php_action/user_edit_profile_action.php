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

  $user_name = $_POST['user_name'];
  $user_ic = $_POST['user_ic'];
  $user_phone = $_POST['user_phone'];
  $user_address = $_POST['user_address'];
  $user_email = $_POST['user_email'];
  $user_pass = $_POST['user_pass'];

$sql = "UPDATE user SET user_name ='$user_name' , user_phone ='$user_phone' , user_address ='$user_address', user_email ='$user_email', user_pass ='$user_pass' WHERE user_ic ='$user_ic'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Record updated successfully')</script>";
               echo "<script>location.href='../user_profile.php'</script>";
            }
          else {
               echo "<script>alert('Error updating record: ')</script>" . $conn->error;
               echo "<script>location.href='../user_profile.php'</script>";
            }
  

$conn->close();
?>