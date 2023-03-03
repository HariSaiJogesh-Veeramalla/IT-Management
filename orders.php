<?php 
session_start();
include('include/config.php');

include('include/seo.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<?php include('include/head.php');?>	
</head>
<body>
<div style="background-color:#fff ;">
	<?php include('include/header.php');?>
</div>

<div style="background-color:#fff;">
	<section class="container ourservices text-center" style="height:auto;">
		<h1 class="headtext" style="margin-top:0px; padding-top:0px;">
			Order Status
		</h1>
		<div class="row">
			<div class="col-lg-12" style="margin:0 auto;">
				<table class="table responsive-table table-responsive grid">
					<thead>
						<th width="190px"> Vehicle Name </th>
						<th> Start Location </th>
						<th width="170px"> End Location </th>
						<th>Weight</th>
						<th>PickUp Data&time </th>
						<th> Rate Per Km </th>
						<th> Distance (Calculate) </th>
						<th> Total Amount </th>

						<th width="150px"> Status </th>
					</thead>
					<tbody>
					<?php
					$Query = "SELECT * FROM orders";
					$Result = $Conn->query($Query);			
					foreach($Result as $Data)
					{
					?>	
						<tr>
							<td><?=$Data['name']?></td>
							<td><?=$Data['start_loc']?></td>
							<td><?=$Data['end_loc']?></td>
							<td><?=$Data['weight']?></td>
							<td><?=$Data['date_time']?></td>
							<td><?=$Data['price']?></td>

							<?php 
							if($Data['status'] == 2)
							{
							?>
							<td><?=$Data['distance']?></td>
							<td><?=$Data['totalamount']?></td>
							<td><b style="color: green">Approved</b></td>
							<?php  
							}

							if($Data['status'] == 1)
							{
							?>
								<td><?=$Data['distance']?></td>
								<td><?=$Data['totalamount']?></td>
								<td><b style="color: red">Pending</b></td>
							<?php  
							}

							if($Data['status'] == 3)
							{
							?>
								<td><?=$Data['distance']?></td>
								<td><?=$Data['totalamount']?></td>
								<td><b style="color: blue">Completed</b></td>
							<?php  
							}
							?>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>		
			</div>
		</div>
	</section>
	
	<div>
		<?php include('include/footer.php');  ?>
	</div>

	</body>
</html>