<?php
$con=mysql_connect("127.0.0.1","root","comrade");
if(!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("hospital",$con);
?>