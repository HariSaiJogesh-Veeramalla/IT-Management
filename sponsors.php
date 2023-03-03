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

<section class="ourcustomers Advatages">
	<div class="container text-center">
		<h1 class="headertext">
			<u>
				<b>OUR  PARTNERS & SPONSORS</b>
			</u>
		</h1>
		<div class="row">
			<?php
			$Query = "SELECT * FROM sponsors WHERE status = 1 ";
			$Result = $Conn->query($Query);			
			foreach($Result as $Data)
			{
			?>
			<div class="col-lg-3 col-md-3 col-sm-3 col-12 d-block m-auto">
				<figure class="figure margintop">
					<img src="Images/<?=$Data['img']?>" 
					class="figure-img img-fluid rounded-circle" 
					height="210px" width="210px">
					<figcaption>
						<p class="figure-caption">
							<?=$Data['title']?>
						</p>
					</figcaption>
				</figure>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</section>

	<div>
		<?php include('include/footer.php');  ?>
	</div>

</body>
</html>