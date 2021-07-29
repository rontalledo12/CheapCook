<?php include('header.php'); ?>
<body>
<style>
	body {
		background-image: url("upload/bg1.jpg")
	}
</style>
<?php include('navbar.php'); ?>
<div class="container">
	<h1 class="page-header text-center">SALES</h1>
	<table class="table table-striped table-bordered"  style="background-color: white;">
		
		<thead><th><b>TOTAL SALES MADE:</b>&nbsp&nbsp&nbsp <u>&#8369 

				<?php	include('conn.php');
					$sql = "SELECT SUM(`total`) FROM `purchase`";
					$res = $conn->query($sql);

					if($res->num_rows > 0) {
						while($row = $res->fetch_assoc()){
							echo $row['SUM(`total`)'];
						}
					}


				?>	


		</u>        
		<br><br> 
			</th></thead>

			<thead>
			<th>Date</th>
			<th>Customer</th>
			<th>Total Sales</th>
			<th>Details</th>
			<th>Status</th>
			<th>Action</th>
		</thead>
		<tbody>
			

			<?php 
				$sql="select * from purchase order by purchaseid desc";
				$query=$conn->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr> 
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?></td>
						<td><?php echo $row['customer']; ?></td>
						<td class="text-right">&#8369; <?php echo number_format($row['total'], 2); ?></td>
						<td><a href="#details<?php echo $row['purchaseid']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View </a>
							<?php include('sales_modal.php'); ?>
						</td>
						<td><?php echo $row['status']; ?></td>
						<td>
					<?php if($row['status']=='Pending'){?>
				
					<a href="queue.php?complete=<?php echo $row['purchaseid']; ?>" class="complete" >Complete Order</a>
				
					<?php }?>	
					<?php if($row['status']=='Complete'){?>
				
					<a href="queue.php?remove=<?php echo $row['purchaseid']; ?>" class="remove" >Remove Order</a>
			
					<?php }?>	</td>
					</tr>
							

					<?php
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>