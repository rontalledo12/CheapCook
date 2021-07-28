<?php
	include('conn.php');

	$pname=$_POST['pname'];
	$pdets=$_POST['productdetails'];
	$price=$_POST['price'];
	$category=$_POST['category'];



	if(empty($fileinfo['filename'])){
		$location="";
	}
	else{
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/" . $newFilename);
	$location="upload/" . $newFilename;
	}
	
	$sql="insert into product (productname, productdetails, categoryid, price, photo) values ('$pname','$pdets', '$category', '$price', '$location')";
	$conn->query($sql);

	header('location:product.php');

?>