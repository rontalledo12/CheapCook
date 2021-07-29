<?php
require_once('conn.php');
session_start();
$complete=false;
if (isset($_GET['complete'])) {
	$id = $_GET['complete'];
	mysqli_query($conn, "UPDATE purchase SET status='Complete' WHERE purchaseid=$id AND status='Pending' ");
	header('location: sales.php');
}
if (isset($_GET['remove'])) {
	$id = $_GET['remove'];
	$sql=mysqli_query($conn, "DELETE FROM purchase WHERE purchaseid=$id");
	if($sql>0){

		header('location: sales.php');
	}
}
?>