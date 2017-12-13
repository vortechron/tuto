<?php
require('user_session.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['plat_num'])){
        // removes backslashes
	$plat_num = stripslashes($_REQUEST['plat_num']);
        //escapes special characters in a string
	$plat_num = mysqli_real_escape_string($con,$plat_num); 
	
	$vehicle_type = stripslashes($_REQUEST['vehicle_type']);
        //escapes special characters in a string
	$vehicle_type = mysqli_real_escape_string($con,$vehicle_type);
	
	$vehicle_model = stripslashes($_REQUEST['vehicle_model']);
        //escapes special characters in a string
	$vehicle_model = mysqli_real_escape_string($con,$vehicle_model);
	
	
	
        $query = "INSERT INTO `vehicle` (user_ic, plat_num, vehicle_type, vehicle_model)
VALUES ('{$_SESSION['user_ic']}', '$plat_num', '$vehicle_type', '$vehicle_model')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "success";
            header("location: ../user_vehicle.php");
        }
    }else{
?>

<?php } ?>
</body>
</html>

