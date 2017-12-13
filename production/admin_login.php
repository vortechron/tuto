
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Smart Automative Logging Entry System (SALES) </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          
            <form action="php_action/admin_login_action.php" method="post">
              <h1>Login Form</h1>
              <div>
                <input name="admin_email" type="email" class="form-control" placeholder="Email" required />
              </div>
              <div>
                <input name="admin_pass" type="password" class="form-control" placeholder="Password" required />
              </div>
              <div>
                <input type="submit" name="login" id="login" value="Log in">
                
                <?php
		if(isset($_GET['error'])){
				   echo "Login failed";
			   }	  
		?>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

               
            </form>
          </section>
        </div>

        <div id="register"  class="animate form registration_form">
          <section class="login_content">
            <form action="php_action/admin_register_action.php" method="post">
              <h1>Create Account</h1>
              <div>
                <input name="admin_name"  type="text"  class="form-control" placeholder="Name" required />
              </div>
            
              <div>
                <input name="admin_email" type="email"  class="form-control" placeholder="Email" required />
              </div>
              
              <div>
                <input name="admin_pass" type="password"  class="form-control" placeholder="Password" required />
              </div>
              <div>
               <center> <input type="submit" name="submit" value="Submit"></center>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
