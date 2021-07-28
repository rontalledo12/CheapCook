<html>
<head>

	<title>SiloganNiGian</title>
</head>
<style>
	.box {
	margin-left: 100px;
	margin-top: 50px;
	margin-right: 150px;
	padding-bottom: 137px;
	background-color: rgb(220,220,220);
	position: static;
	
}
.blackleft {
	border: 1px solid black;
	margin-right: 80%;
	padding-bottom: 550px;
	text-align: center;
	background-color: black;
}
#grbox {
	background-color: green;
	color: white;
	margin-left: 40px;
	margin-right: 40px;
	padding: 8px;
}
#time {
	color: white;
	margin-bottom: 296px;
}
.topgreen {
	margin-left: 254px; 
	margin-top: -552px;
	background-color: rgb(152,251,152);
}
#logbox {
	background-color: rgb(50,205,50);
	padding: 20px;
	margin-right: 75%;
	margin-top: -1px;
	text-align: center;
}
.titl{
	text-align: center;
	margin-left: 100px;
	margin-top: 50px;
	color: rgb(50,205,50);
}

#sub {
	background-color: rgb(34,139,34);
	padding: 7px;
	padding-left: 30px;
	padding-right: 30px;
	color: white;
}
</style>
<body>
	<div class="box">
		<div class="blackleft">
			
		</div>

		<div class="topgreen">
			<div>
				<p id="logbox" style="color: white">Log In</p>
			</div>
		</div>
		<div class="titl">
			<h2>CheapCook POS System</h2>
			<form action="alogindb.php" method="POST">
  				<label for="username" style="color: black">Username:</label><br>
  				<input type="text" id="username" name="username"><br><br>
 				<label for="pwd" style="color: black">Password:</label><br>
  				<input type="password" id="pwd" name="password"><br><br>
				  
  				<input id="sub" type="submit" value="Log In">
			</form>
		</div>
		<br><br><br><br><br>
	</div>
</body>
</html>