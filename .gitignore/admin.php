<?php
session_start();

?>

<html>
	<head>
		<title> ADMIN </title>
	</head>
<style type="text/css">
	body {
		background: url(GoldStart.jpg);
	}
</style>

<body>
<form method='post' action='admin.php'>
	<table width='400' border='5' align='center'>
	<tr>
		<td colspan='5' align='center'><h1> LOGIN </h1></td>
		</tr>
	
	<tr>
		<td> Admin :</td>
		<td><input type='text' name='admin'</></td>
	</tr>
	
	
	
	<tr>
		<td colspan='2' align='center'><input type='submit' name='login' value='proceed'</></td>
	</tr>
	
	</table>
</form>
<center><br><a href='reg.php'> New User Sign Up</a></center>
</html>

<?php
mysql_connect('localhost','root','usbw');
mysql_select_db('users_db');

if (isset($_POST['login'])) {

	$admin_pass = $_POST['admin'];
	 
	if($admin_pass==''){
		echo "<script>alert('please admin passcode !')</script>";  
         exit();
		  
	  }

$admin = $_POST['admin'];

$check_user = "select * from users where admin_pass = '$admin'";

$run = mysql_query($check_user);

	if (mysql_num_rows($run)>0) {

	$_SESSION['admin'] = $admin;



	echo
	"<script>window.open('debug.php','_self')</script>";  
	}
	else {
		echo "<script>alert('wrong details')</script>";
	}


}


?>