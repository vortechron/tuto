<?php 
namespace View;

use Illuminate\Database\Capsule\Manager as Database;
session_start();

require("php_action/db_conn.php");
require 'php_action/user_name.php';

// $sql = "SELECT * FROM vehicle WHERE user_ic = '{$_SESSION['user_ic']}'";

// //$r_query = $con->query($sql) or die(mysqli_error($con));
// $recent = mysqli_query($con, $sql) or die(mysqli_error($con));
// if (mysqli_num_rows($recent) > 0) {
//     // output data of each row
//   while ($row = mysqli_fetch_assoc($recent)) {
//    $vehicle_type = $row['vehicle_type'];            
//    $plat_num = $row['plat_num'];            
//    $vehicle_model = $row['vehicle_model'];            
//    $vehicle_type = $row['vehicle_type'];             
   
//  }
// }

$value = Database::table('vehicle')->where('plat_num', $_GET['edit'])->first();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Smart Automative Logging Entry System (SALES)</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  
  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <class="site_title"></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/user.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <?php 
              require 'php_action/user_name.php';
              ?>
              <span>Welcome,</span>
              <h2><?php echo $data['user_name']?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="user_home.php"><i class="fa fa-home"></i> Home </a></li>
                <li><a href="user_vehicle.php"><i class="fa fa-automobile"></i> Vehicle's Info</a></li>
                <li><a href="user_timestamp.php"><i class="fa fa-clone"></i>Logging info</a></li>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="php_action/user_logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt=""><?php echo $data['user_name']?>                    
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="user_profile.php"> Profile</a></li> 
                    <li><a href="php_action/user_logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li></ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3></h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Updated Session</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  

                  <form action="php_action/edit_vehicle_action.php" method="post" class="form-horizontal form-label-left" novalidate>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vehicle_type">Vehicle's Type <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control"  id="vehicle_type" name="vehicle_type" value="<?php echo $value['vehicle_type']?>"
                          <option value=""> ~~  Choose Type of Vehicle  ~~</option>
                          <option value="Car">Car</option>
                          <option value="Motorcycle">Motorcycle</option></select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vehicle_model">Vehicle's Model<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="vehicle_model" name="vehicle_model" value="<?php echo $value['vehicle_model']; ?>" required class="form-control col-md-7 col-xs-12">
                       </div>
                     </div>
                     
                     <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="plat_num">Vehicle's Plat Number <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <input type="text" id="plat_num" name="plat_num" value="<?php echo $value['plat_num']; ?>" required class="form-control col-md-7 col-xs-12">
                     </div>
                   </div><br>

                   <div class="ln_solid"></div>
                   <div class="form-group">
                     <div class="col-md-6 col-md-offset-3">
                      <center>
                       
                       <input type="hidden" name="plat_num" id="plat_num" value="<?php echo $plat_num ?>" />
                       <button id="send" type="submit" class="btn btn-success">Save Changes</button></center>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- /page content -->
     
     <!-- footer content -->
     <footer>
      <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- validator -->
<script src="../vendors/validator/validator.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>