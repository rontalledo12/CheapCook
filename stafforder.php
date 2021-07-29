<?php include('header.php'); ?>
<style>
	body {
		background-image: url("upload/bg1.jpg")
	}
</style>
<body>
<?php include('staffnavbar.php'); ?>
<div class="container">
	<h1 class="page-header text-center">ORDER</h1>
	<form method="POST" action="staffpurchase.php">
		<table class="table table-striped table-bordered"  style="background-color: white">
			<thead>
				<th class="text-center"><input type="checkbox" id="checkAll"></th>
				<th>Category</th>
				<th>Product Name</th>
				<th>Product Details</th>
				<th>Availability</th>
				<th>Price</th>
				<th>Quantity</th>
			</thead>
			<tbody>
				<?php 
					$sql="select * from product left join category on category.categoryid=product.categoryid order by product.categoryid asc, productname asc";
					$query=$conn->query($sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><?php if($row['prodavail']=='Available'){?><input type="checkbox" value="<?php echo $row['productid']; ?>||<?php echo $iterate; ?>" name="productid[]" style=""><?php }?></td>
							<td><?php echo $row['catname']; ?></td>
							<td><?php echo $row['productname']; ?></td>
							<td><?php echo $row['productdetails']; ?></td>
							<td><?php echo $row['prodavail']; ?></td>
							<td class="text-right">₱ <?php echo number_format($row['price'], 2); ?></td>
							<td><?php if($row['prodavail']=='Available'){?>
							<input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>">
				
				
				
					<?php }?></td>
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>
		
		<div class="row">
			<div class="col-md-3">
				<input type="text" name="customer" class="form-control" placeholder="Customer Name" required>
			</div>
			<div class="col-md-2" style="margin-left:-20px;">
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</div>
			<br><br><br>
		</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});

function decVal()
{
		var value = parseInt(document.getElementByID('prodavail').value, 10);
		value = isNaN(value) ? 0 : value;
		value--;
		document.getElementByID('prodavail').value = value;
}


</script>
</body>
</html>