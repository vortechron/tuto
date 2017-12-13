<?php
require('db_conn.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['user_email'])){
        // removes backslashes
	$user_ic = stripslashes($_REQUEST['user_ic']);
        //escapes special characters in a string
	$user_ic = mysqli_real_escape_string($con,$user_ic); 
	
	$user_name = stripslashes($_REQUEST['user_name']);
        //escapes special characters in a string
	$user_name = mysqli_real_escape_string($con,$user_name);
	
	$user_email = stripslashes($_REQUEST['user_email']);
        //escapes special characters in a string
	$user_email = mysqli_real_escape_string($con,$user_email);
	
	$user_address = stripslashes($_REQUEST['user_address']);
        //escapes special characters in a string
	$user_address = mysqli_real_escape_string($con,$user_address);
	
	$user_phone = stripslashes($_REQUEST['user_phone']);
	$user_phone = mysqli_real_escape_string($con,$user_phone);

	$user_pass = stripslashes($_REQUEST['user_pass']);
	$user_pass = mysqli_real_escape_string($con,$user_pass);
	
	
        $query = "INSERT into `user` (user_ic, user_name, user_email, user_address, user_phone, user_pass )
VALUES ('$user_ic', '$user_name', '$user_email', '$user_address', '$user_phone', '$user_pass')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><br>
<center><h1>You are registered successfully.</h1>
<br/><h3>Click here to <a href='../user_login.php'>Login</a></h3></div></center>";
        }
    }else{
?>

<?php } ?>
</body>
</html>