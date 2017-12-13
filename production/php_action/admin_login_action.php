<?php

include("db_conn.php");
   session_start();
      
	  		//Function to sanitize values received from the form. Prevents SQL injection
		function clean($con, $str) {
			$str = @trim($str);
			if(get_magic_quotes_gpc()) {
				$str = stripslashes($str);
			}
			return mysqli_real_escape_string($con, $str);
		}
	
		//Sanitize the POST values
		$admin_email = clean($con, $_POST['admin_email']);
		$admin_pass = clean($con, $_POST['admin_pass']);
	
		//Create query
		$qry="SELECT admin_id from admin where admin_email='$admin_email' and admin_pass='$admin_pass'";
		$result=mysqli_query($con, $qry);
		//Check whether the query was successful or not
		if($result) {
			if(mysqli_num_rows($result) == 1) {
				//Login Successful
				$member = mysqli_fetch_array($result, MYSQLI_ASSOC);
				$admin_id = $member['admin_id'];
				$_SESSION['admin_id'] = $admin_id;
				session_write_close();
				
				
				header("location: ../admin_home.php");
				exit();
			} else {
				header("location: ../admin_login.php?error=true");
				exit();
			}
		} else {
			echo("Error description: " . mysqli_error($con));
			exit();
		}

?>