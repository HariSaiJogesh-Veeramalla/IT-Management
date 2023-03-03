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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <?php
		$Acc = 0;
		$Result =	$Conn->query("SELECT * FROM slider WHERE status = 1");
		if($Result->num_rows > 0)
		{			
			foreach ($Result as $Data) 
			{
				$Acc++;
				if($Acc ==1)
				{
					$Active = "active";
				}
				else
				{
					$Active = "";	
				}
			?>
	    <div class="carousel-item <?=$Active?> ">
	      <img class="d-block w-100" src="images/slider/<?=$Data['pic']?>">
	    </div>
    	<?php 
			}
		}
		?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div style="background-color:#fff;">
	<section class="container ourservices text-center" style="height:auto;">
		<h1 class="headtext" style="margin-top:0px; padding-top:0px;">
			<u> SELECT VEHICLE</u>
		</h1>
		<div class="row">
			<?php
			$Query = "SELECT * FROM vehicles WHERE status = 1 LIMIT 0,6";
			$Result = $Conn->query($Query);			
			foreach($Result as $Data)
			{
			?>	
			<div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto">
			<a href="detail.php?id=<?=$Data['id']?>" style="color:#121212;text-decoration:none;">
				<div style="width:100%; box-shadow:1px 1px 2px 1px #999; margin-bottom:12px;">
					<img src="images/vehicles/<?=$Data['img']?>" 
					style="width:100%; max-height:250px;">
					<h4 class="headtext"><?=$Data['name']?></h4>
					<p style="height:40px;">
						<?=$Data['description']?>
					</p>
				</div>
			</a>
			</div>
			<?php
			}
			?>
		</div>
		<center>
			<a href="vehicles.php">
				<button style="background:#121212; color:#fff; padding:10px 45px; 
				margin-top:22px; border:none;">
					All Vehicles
				</button>
			</a>
		</center>
	</section>
	


	<div>
		<?php include('include/footer.php');  ?>
	</div>

</body>
</html>