<?php
	include('conn.php');

	$pname=$_POST['pname'];
	$pdets=$_POST['productdetails'];
	$prodavail=$_POST['prodavail'];
	$price=$_POST['price'];
	$category=$_POST['category'];
	$fileinfo=PATHINFO($_FILES["photo"]["name"]);



	if(empty($fileinfo['filename'])){
		$location="";
	}
	else{
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/" . $newFilename);
	$location="upload/" . $newFilename;
	}
	
	$sql="insert into product (productname, productdetails, prodavail, categoryid, price, photo) values ('$pname','$pdets', '$prodavail','$category', '$price', '$location')";
	$conn->query($sql);

	header('location:product.php');

?>


?>