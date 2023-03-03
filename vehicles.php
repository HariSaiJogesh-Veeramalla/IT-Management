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
			Software/Hardware
		</h1>
		<div class="row">
			<?php
			if(!empty($_GET['cat']))
			{
				$Query = "SELECT * FROM vehicles WHERE status = 1 AND  
				menu_id = ".$_GET['cat']." ";	
			}
			else
			{
				$Query = "SELECT * FROM vehicles WHERE status = 1";
			}
			
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
	</section>
	
	<div>
		<?php include('include/footer.php');  ?>
	</div>

	</body>
</html>