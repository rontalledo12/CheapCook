<?php
require_once('conn.php');
session_start();
$complete=false;
if (isset($_GET['complete'])) {
	$id = $_GET['complete'];
	mysqli_query($conn, "UPDATE purchase SET status='Complete' WHERE purchaseid=$id AND status='Pending' ");
	header('location: staffsales.php');
}

?>