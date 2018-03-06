<?php
session_start();

if (!$_SESSION['admin']) {
	
	header("location:admin.php");
}


?>

<html>
	<head>
		<title> data center </title>
	</head>


<body>
<br>
	<?php
		echo $_SESSION ['admin'];
	?>

</br>
<center><h2>data manipulation center</h2></center>
  <font size='8' color="red">
  	<?php echo @$_GET['deleted'];?>
  </font>
<table width="800" align="center" border="5" bgcolor="yellow">
	<tr bgcolor="pink">
		<th>User No</th>
		<th>User Name</th>
		<th>User Password</th>
		<th>User Email</th>
		<th>Admin User</th>
		<th>Delete User</th>
	</tr>
	<tr>
<?php 
mysql_connect('localhost','root','usbw');
mysql_select_db('users_db');

	$query = 'select * from users';

	$run = mysql_query($query);

while ($row = mysql_fetch_array($run)) {
	

	$user_id    = $row[0];
	$user_name  = $row[1];
	$user_pass  = $row[2];
	$user_email = $row[3];
	$admin_pass = $row[4];
?>
<tr align="center">

<td><?php echo $user_id ;?></td>
<td><?php echo $user_name ;?></td>
<td><?php echo $user_pass ;?></td>
<td><?php echo $user_email ;?></td>
<td><?php echo $admin_pass ;?></td>
<td> <a href = 'delete.php?del=<?php echo $user_id ;?>'>delete<a/></td>
</tr>

<?php } ?>

</table>
<h1
    align='right'style='margin-right:50px;margin-top:100px;'> 
    <a href='admin.php'> LOGOUT HERE </a> 
</h1>

</body>
</html>