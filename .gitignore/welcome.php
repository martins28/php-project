<?php
session_start();

if (!$_SESSION['email']) {
	
	header("location:login.php");
}


?>

<html>
	<head>
		<title> WELCOME </title>
	</head>
<style type="text/css">
	body {
		background: url(welcome.jpg);
	}
</style>

<body>
<b>
<font color='black'  size='10' > Welcome </font>
</b>
<font color='purple'  size='10' >
	<?php
		echo $_SESSION ['email'];
	?>
</font>

<h1
    align='right'style='margin-right:50px;margin-top:50px;'> 
    <a href='logout.php'> LOGOUT HERE </a> </h1>
</body>
</html>