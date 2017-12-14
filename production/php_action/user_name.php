<?php

namespace Action;

use Illuminate\Database\Capsule\Manager as Database;

include __DIR__ . "/../composer.php";

$data = Database::table('user')->where('user_ic', $_SESSION['user_ic'])->first();

// $link = \mysql_connect("localhost","root","");
// \mysql_select_db("sales",$link);

// $run = \mysql_query("Select * from user where user_ic = '".$_SESSION['user_ic']."' LIMIT 1");
// $data = array();
// $counter = 0;
// while($row=\mysql_fetch_array($run))
// {
// 	$data= $row;
// 	$counter++;
// }





?>