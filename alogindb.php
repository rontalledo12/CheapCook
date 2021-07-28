<?php

require_once('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{

	while($row = mysqli_fetch_assoc($result))
	{

		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['username'] = $username;
	
	}
	header("Location: index.php");
}
else
{
	echo "Invalid email or password". $sql;
}
?>