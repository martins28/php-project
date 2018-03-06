<?php
mysql_connect('localhost','root','usbw');

mysql_select_db('users_db');

$delete_id = $_GET['del'];

$query = "delete from users where id= '$delete_id'";

if (mysql_query($query)) {

	$y = "<script>window.open('debug.php?deleted=user has been deleted !!!','_self')</script>";
	
	echo $y;
}

?>