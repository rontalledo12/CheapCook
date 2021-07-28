<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
	<div class="row">
	<div class="col-md-4 login-sec">
	<h2 class="text-center">Manager Login</h2>
	<form class="login-form" action="aloginmngrdb.php" method="POST">
  	<div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="Username" name="username">
    
  	</div>
  	<div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="password">
  	</div>
  
    <div class="form-check">
    <label class="form-check-label">
    </label>
    <button type="submit" class="btn btn-login float-right">Login</button>
    <a href="alogin.php">Login as Staff</a>
  </div>
  
</form>
<div class="copy-text"><i class="fa fa-heart"></i></div>
</div>
		<div class="col-md-8 banner-sec">   
            <div class="carousel-inner" role="listbox">
    			<div class="carousel-item active">
      <img class="d-block img-fluid" src="upload/mngr.jpg">
      				<div class="carousel-caption d-none d-md-block">
        				<div class="banner-text">
            <h2>CheapCook</h2>
            
        				</div>	
  					</div>

    			</div>
  			</div>
        </div>	   
		    
	</div>
</div>
</div>
</section>

<style>
	@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

.login-block{
background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding-bottom: 500px;
padding : 180px;
}
img{
	padding: 20px;
}

.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}
</style>
