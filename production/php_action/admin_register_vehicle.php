<?php
require('db_conn.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['user_ic'])){
        // removes backslashes
    $user_ic = stripslashes($_REQUEST['user_ic']);
        //escapes special characters in a string
    $user_ic = mysqli_real_escape_string($con,$user_ic); 
    
    $vehicle_type = stripslashes($_REQUEST['vehicle_type']);
        //escapes special characters in a string
    $vehicle_type = mysqli_real_escape_string($con,$vehicle_type);
    
    $vehicle_model = stripslashes($_REQUEST['vehicle_model']);
        //escapes special characters in a string
    $vehicle_model = mysqli_real_escape_string($con,$vehicle_model);
    
    $plat_num = stripslashes($_REQUEST['plat_num']);
        //escapes special characters in a string
    $plat_num = mysqli_real_escape_string($con,$plat_num);
    
    
        $query = "INSERT into `vehicle` (user_ic, vehicle_type, vehicle_model, plat_num)
VALUES ('$user_ic', '$vehicle_type', '$vehicle_model', '$plat_num')";

        $result = mysqli_query($con,$query);
        
        if($result){
               echo "<script>alert('Registered successful')</script>";
               echo "<script>location.href='../add_vehicle.php'</script>";
            }
          else {
               echo "<script>alert('Error while register')</script>";
               echo "<script>location.href='../add_vehicle.php'</script>";
            }
               //echo "<script>alert('".$stmt->error."')</script>";
    }else{
?>

<?php } ?>
</body>
</html>