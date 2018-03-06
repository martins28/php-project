<html>
	<head>
		<title> Registration Form </title>
	</head>

<body>
<form method='post' action='reg.php'>
	<table width='400' border='5' align='center'>
	<tr>
		<td colspan='5' align='center'><h1> Registration Form</h1></td>
		</tr>
	
	<tr>
		<td>User Name :</td>
		<td><input type='text' name='name'</></td>
	</tr>
	
	<tr>
		<td>User Password :</td>
		<td><input type='password' name='pass'</></td>
	</tr>
	
	<tr>
		<td>Email :</td>
		<td><input type='text' name='email'</></td>
	</tr>
	
	<tr>
		<td colspan='2' align='center'><input type='submit' name='submit' value='SIGN UP'</></td>
	</tr>
	
	</table>
</form>
<center><b>Already registered ? </b><br><a href='login.php'> LOGIN HERE</a></center>
</html>

<?php
mysql_connect( "localhost", "root", "usbw");
mysql_select_db("users_db");


  if(isset($_POST['submit'])){
	  
	  $user_name = $_POST['name']; 
	  $user_pass = $_POST['pass'];
	  $user_email = $_POST['email'];
	  
	  if($user_name==''){
		echo "<script>alert('please enter your name !')</script>";  
		 exit();  
		  
	  }
	  if($user_pass==''){
		echo "<script>alert('please enter your password !')</script>";  
         exit();
		  
	  }
	  if($user_email==''){
		echo "<script>alert('please enter your valid email !')</script>";  
		 exit();  
		  
	  }
	  
	  $check_email = "select * from users where user_email='$user_email'";

	  $run = mysql_query($check_email);

	  if (mysql_num_rows($run)> 0) {

	  	echo "<script>alert('Email $user_email is already existing')</script>";
	  	exit();
	  }

	  $query = "insert into users (user_name, user_pass, user_email) values('$user_name','$user_pass','$user_email')";
	  	if (mysql_query($query)) {
	  		
	  	echo
		 "<script>window.open('welcome.php','_self')</script>";  
		  
	
	  	}
  }

?>

