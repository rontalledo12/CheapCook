<?php

require_once('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];
$role = 'staff';
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password' AND role='$role' ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{

	while($row = mysqli_fetch_assoc($result))
	{

		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
	
	}
	header("Location: staffindex.php");
}
else
{
	echo "Invalid email or password";
}
?>