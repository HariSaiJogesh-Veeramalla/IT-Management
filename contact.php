<?php 
session_start();
include('include/config.php');
include('include/seo.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="footer, address, phone, icons" />
<link rel="stylesheet" type="text/css" href="css/about.css">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	
<link rel="stylesheet" type="text/css" href="file:///C:/Users/Abdul%20Saboor/Downloads/Compressed/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css">

<script type="text/javascript" src="file:///C:/Users/Abdul%20Saboor/Downloads/Compressed/bootstrap-5.0.0-beta1-dist/js/bootstrap.min.js"></script>
 <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/Dash.css">

</head>
<body>
	<?php include('include/header.php');  ?>
	
	<div class="container">
		<h2 class="text-center" style="margin-top:40px;">
			Contact Us
		</h2>
		<div class="row" style="margin-bottom:0px; margin-top:20px; height:auto;">
			<div class="col-md-3">
				<p style="font-weight:600;">
					Email: 
					<br>
					<a href="mailto:<?=$Email?>">
						<?=$Email?>
					</a>
					<br><br>
					Phone:
					<br>
					<a href="tel:<?=$Contact?>">
						<?=$Contact?>
					</a> 
					<br><br>
					Address:
					<br> 
					<?=$AddrB?>
				</p>
			</div>
			<div class="col-md-9">
				<div class="col-md-12">
					<div class="mapouter">
						<div class="gmap_canvas">
							<iframe width="100%" height="500" id="gmap_canvas" 
							src="https://maps.google.com/maps?q=Sahiwal%20Pakistan&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
							</iframe>
						</div>
						<style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}
						</style>
					</div>
				</div>
			</div>
		</div>	
	</div>	
	<div>
		<?php include('include/footer.php');  ?>
	</div>
</body>
</html>