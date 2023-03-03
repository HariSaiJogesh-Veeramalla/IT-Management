<?php 
session_start();
include('include/config.php');

include('include/seo.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trucker Orders</title>
	<?php include('include/head.php');?>	
</head>
<body>
<div style="background-color:#fff ;">
	<?php include('include/header.php');?>
</div>

<div style="background-color:#fff;">
	<section class="container ourservices text-center" style="height:auto;">
		<h1 class="headtext" style="margin-top:0px; padding-top:0px;">
			Trucker Orders Status
		</h1>
		<div class="row">
			<div class="col-lg-12" style="margin:0 auto;">
				<table class="table responsive-table table-responsive grid">
					<thead>
						<th> Phone No. </th>
						<th> Vehicle Category </th>
						<th> Start from </th>
						<th> End Location </th>
						<th> Weight Limit</th>
						<th> Load Category </th>
						<th> Freight Charges </th>
						<th> Description </th>
						<th width="150px"> Status </th>

					</thead>
					<tbody>
					<?php
					$Query = "SELECT * FROM torder";
					$Result = $Conn->query($Query);			
					foreach($Result as $Data)
					{
					?>	
						<tr>
							<td><?=$Data['phone']?></td>
							<td><?=$Data['v_category']?></td>
							<td><?=$Data['p_loc']?></td>
							<td><?=$Data['d_loc']?></td>
							<td><?=$Data['loadlimit']?></td>
							<td><?=$Data['loadtype']?></td>
							<td><?=$Data['f_charges']?></td>
							<td><?=$Data['description']?></td>

							<?php 
							if($Data['status'] == 2)
							{
							?>
							  
						 
							<td><b style="color: green">Approved</b></td>
							<?php  
							}

							if($Data['status'] == 1)
							{
							?>
								  
							 
								<td><b style="color: red">Pending</b></td>
							<?php  
							}

							if($Data['status'] == 3)
							{
							?>													 
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