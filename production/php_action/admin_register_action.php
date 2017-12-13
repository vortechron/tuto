<?php
require('db_conn.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['admin_email'])){
        // removes backslashes
	
	$admin_name = stripslashes($_REQUEST['admin_name']);
        //escapes special characters in a string
	$admin_name = mysqli_real_escape_string($con,$admin_name);
	
	$admin_email = stripslashes($_REQUEST['admin_email']);
        //escapes special characters in a string
	$admin_email = mysqli_real_escape_string($con,$admin_email);

	$admin_pass = stripslashes($_REQUEST['admin_pass']);
	$admin_pass = mysqli_real_escape_string($con,$admin_pass);
	
	
        $query = "INSERT into `admin` (admin_name, admin_email, admin_pass )
VALUES ('$admin_name', '$admin_email', '$admin_pass')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><br>
<center><h1>You are registered successfully.</h1>
<br/><h3>Click here to <a href='../admin_login.php'>Login</a></h3></div></center>";
        }
    }else{
?>

<?php } ?>
</body>
</html>