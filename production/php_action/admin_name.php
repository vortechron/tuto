<?php
$link = mysql_connect("localhost","root","");
mysql_select_db("sales",$link);

$run = mysql_query("Select * from admin where admin_id = '".$_SESSION['admin_id']."' LIMIT 1");
$data = array();
$counter = 0;
while($row=mysql_fetch_array($run))
{
	$data= $row;
	$counter++;
}


?>