<?php 
session_start();
include('include/config.php');

include('include/seo.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Pre-register</title>
	<?php include('include/head.php');?>	

</head>
<body>
<div style="background-color:#fff ;">
	<?php include('include/header.php');?>
</div>

<div class="wrapper">
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
					<form method="POST" name="" action="" class="register active">
						<h3 style="text-align:  center;">Register As</h3>
						
							<a href="register.php" style="text-decoration: none">
								<div style="width: 500px; height: 100px; margin-top: 50px; background-color: #4db380; margin-left: 85px; border-radius: 4px; text-align: center;">
								<h1 style="color: white; font-weight: bold; font-size: 40px; padding-top: 24px">Become a Customer</h1>
								
							</div>
						</a>

								<a href="tregister.php" style="text-decoration: none">
								<div class="fadeout" style="width: 500px; height: 100px; margin-top: 50px; background-color: #f6a85a; margin-left: 85px; border-radius: 4px; text-align: center;">
								<h1 style="color: white; font-weight: bold; font-size: 40px; padding-top: 24px; ">Become a Trucker</h1>
								
							</div>
						</a>

							<div style="width: 500px; height: 50px; margin-top: 50px; background-color: white; margin-left: 85px; border-radius: 4px; text-align: center;">
								<h6 style="color: white; font-weight: bold; padding-top: 24px; text-decoration: none;">Become a Trucker</h6>
								
							</div>
					</form>
				</div>
			</div>
		</div>



	<div>
		<?php include('include/footer.php');  ?>
	</div>

</body>
</html>