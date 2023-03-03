<?php 
session_start();
if(empty($_SESSION['TruckRegEm']))
{
	header("location:login.php?mes=LoginRequired");
}
include('include/config.php');

if(isset($_POST['BtnOrder']))
{
	$Query = "SELECT * FROM vehicles WHERE id = ".$_GET['id']." ";
	$Query = $Conn->query($Query);
	foreach($Query as $Data)
	{
		$Query = "INSERT INTO orders(id,veh_id,name, 
		price, distance, totalamount, img, 
		start_loc, end_loc, dated, status, cname, phone, cnic, loadtype, weight, date_time)
		VALUES(Null,".$_GET['id'].", '".$Data['name']."',
		'".$Data['price']."', 0, 0, '".$Data['img']."',
		'".$_POST['start_loc']."', '".$_POST['end_loc']."',
		'".date("Y-m-d")."', 1 ,'".$_POST['cname']."','".$_POST['phone']."','".$_POST['cnic']."','".$_POST['loadtype']."','".$_POST['weight']."','".$_POST['p_date_time']."'	)";	

		$Conn->query($Query);

		header("location:orders.php");
	}
}

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
	<section class="container ourservices text-center" style="height:90px;">
		<div class="row">
			<div class="col-md-12">
				<h1 class="headerset text-warning" 
					style="margin-top:0px; padding-top:0px;"> 
					<u>Book Order</u>
				</h1>
				<br>
			</div>
		</div>
	</section>

	<section class="container ourservices text-center" style="height:auto; margin-top:0px;">
		<div class="row">
			<?php
			$Query = "SELECT * FROM vehicles WHERE id = ".$_GET['id']." ";
			$Result = $Conn->query($Query);			
			foreach($Result as $Data)
			{
			?>	
			<div class="col-lg-5 col-md-5 col-sm-6 col-12 d-block m-auto">
				<div style="width:100%; box-shadow:1px 1px 2px 1px #999; margin-bottom:12px;">
					<img src="images/vehicles/<?=$Data['img']?>" 
					style="width:100%; height: auto;">
					
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-6 col-12">
				<form method="POST" action="">
					<h2 class="headtext"><?=$Data['name']?></h2>
					<h6 class="headtext">Per Km Price: <?=$Data['price']?> PKR</h6>
					<h6 class="headtext">Model: <?=$Data['model']?></h6>
					<p style="height:40px;">
						<?=$Data['description']?>
					</p>

					<input type="text" name="start_loc" placeholder="PICK UP LOCATION"
					style="width:94%;">
					<br>
					<input type="text" name="end_loc" placeholder="DROP OFF LOCATION"
					style="width:94%;">
					<br>
			<table>
				<tr>
						<td>
						<div>
					<label>Your Name:</label>
					<input type="text" name="cname" style="width: 80%"> 
						</div>
						</td>
							<td>
						<div>
					<label>Phone no:</label>
					<input type="text" name="phone" style="width: 80%" > 
						</div>
						</td>
							<td>
						<div>
						<label>CNIC:</label>
						<input type="Text" name="cnic" style="width: 80%"/>
					</div>
						</td>
				</tr>

				

				<tr>
					<td>
						<div>
						<label>Load Type:</label>
				 <select class="select" name="loadtype" style="width: 80%" >

				        <option name="">select load type</option>
				        <option name="Home Furniture"> Home Furniture </option>
				        <option name="Office Equipment"> Office Equipment </option>      
				        <option name="Agriculture"> Agriculture  </option>
				        <option name="Industrial Goods"> Industrial Goods </option>
				        <option name="Others"> Others </option>
				                    
	             </select>
						</div>
					<td>
						<div>
						<label>Weight:</label>
						<input type="Text" name="weight" style="width: 80%"/>
						</div>
				
					</td>
				<td>
					<div>
						<label>Date & Time:</label>
						<input type="text" name="p_date_time" style="width: 80%"/>
					</div>
				</td>
							
					</tr>
			</table>
			<br>

					<center>
						<button type="submit" name="BtnOrder" class="btn btn-primary text-white" 
						style="width:220px;padding:11px 25px;">
								Book Order Now
						</button>
					</center>
				</form>
			</div>
			<?php
			}
			?>
		</div>
	</section>
</div>
	<div>
		<?php include('include/footer.php');  ?>
	</div>

	</body>
</html>