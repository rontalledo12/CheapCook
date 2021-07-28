<?php
	include('conn.php');

	$id=$_GET['product'];
	$pdets=$_POST['productdetails'];
	$pname=$_POST['pname'];
	$category=$_POST['category'];
	$price=$_POST['price'];

	$sql="select * from product where productid='$id'";
	$query=$conn->query($sql);
	$row=$query->fetch_array();



	

	$sql="update product set productname='$pname',productdetails='$pdets', categoryid='$category', price='$price', photo='$location' where productid='$id'";
	$conn->query($sql);

	header('location:product.php');
?>