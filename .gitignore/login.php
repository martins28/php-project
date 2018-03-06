<?php
session_start();

?>

<html>
	<head>
		<title> WELCOME </title>
	</head>
<style type="text/css">
	body {
		background: url(GoldStart.jpg);
	}
</style>

<body>
<form method='post' action='login.php'>
	<table width='400' border='5' align='center'>
	<tr>
		<td colspan='5' align='center'><h1> LOGIN </h1></td>
		</tr>
	
	<tr>
		<td> EMAIL :</td>
		<td><input type='text' name='email'</></td>
	</tr>
	
	<tr>
		<td> Password :</td>
		<td><input type='password' name='pass'</></td>
	</tr>
	
	
	<tr>
		<td colspan='2' align='center'><input type='submit' name='login' value=' login'</></td>
	</tr>
	
	</table>
</form>
<center><b>Not registered ? </b><br><a href='reg.php'> Sign Up Here</a></center>
<center><br><a href='admin.php'> admin login</a></center>
</html>

<?php
mysql_connect('localhost','root','usbw');
mysql_select_db('users_db');

if (isset($_POST['login'])) {

	$user_pass = $_POST['pass'];
	  $user_email = $_POST['email'];

	if($user_email==''){
		echo "<script>alert('please enter your valid email !')</script>";  
		 exit();  
		  
	  }

	if($user_pass==''){
		echo "<script>alert('please enter your password !')</script>";  
         exit();
		  
	  }

	$email = $_POST['email'];
$password = $_POST['pass'];

$check_user = "select * from users where user_email = '$email' AND user_pass ='$password'";

$run = mysql_query($check_user);

	if (mysql_num_rows($run)>0) {

	$_SESSION['email'] = $email;

	echo
	"<script>window.open('welcome.php','_self')</script>";  
	}
	else {
		echo "<script>alert('wrong details')</script>";
	}


}




?>