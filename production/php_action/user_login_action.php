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
		$user_email = clean($con, $_POST['user_email']);
		$user_pass = clean($con, $_POST['user_pass']);
	
		//Create query
		$qry="SELECT user_ic from user where user_email='$user_email' and user_pass='$user_pass'";
		$result=mysqli_query($con, $qry);
		//Check whether the query was successful or not
		if($result) {
			if(mysqli_num_rows($result) == 1) {
				//Login Successful
				$member = mysqli_fetch_array($result, MYSQLI_ASSOC);
				$user_ic = $member['user_ic'];
				$_SESSION['user_ic'] = $user_ic;
				session_write_close();
				
				
				header("location: ../user_home.php");
				exit();
			} else {
				header("location: ../user_login.php?error=true");
				exit();
			}
		} else {
			echo("Error description: " . mysqli_error($con));
			exit();
		}

?>