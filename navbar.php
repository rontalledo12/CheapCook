<?php
session_start();
$username = $_SESSION['username'];

?>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><b><i>Cheap Cook</i></b></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Menu</a></li>
        <li><a href="order.php">Order</a></li>
        <li><a href="sales.php">Sales</a></li>
        <li>
          <a href="#" class="dropdown-toggle" style="margin-right:550px" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Maintenace <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="product.php">Products</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="category.php">Category</a></li>
          </ul>
          <li>
         <a href="#" class="dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manager <?php echo $username;?><span class="caret"></span></a>
         <ul class="dropdown-menu">
         <li><a href="logout.php" style="color:red">Logout</a></li>
         </ul> 
         </a></li>
        </li>
      </ul>
    </div>
  </div>
</nav>