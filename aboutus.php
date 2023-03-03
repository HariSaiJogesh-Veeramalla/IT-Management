<?php 
session_start();
include('include/config.php');

include('include/seo.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
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
	
	<div class="container content text-center bg-light">
		<h2 class="text-center">
			About Us
		</h2>
		<?php
		$Qry = "SELECT * FROM about WHERE id >= 0  ORDER BY id ASC";
        $Execute = $Conn->query($Qry);
        foreach($Execute as $Data)
        {
        ?>
		<div class="row" style="margin-bottom:30px;">
			<div class="col-md-8">
				<div class="col-md-12">
					<h3 class="headertext">
						<?=$Data['title']?>
					</h3>
					<p>
						<?=$Data['description']?>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/<?=$Data['img']?>" style="max-height:250px;">
			</div>
		</div>	
		<?php
		}
		?>
	</div>
	
	<div>
		<?php include('include/footer.php');  ?>
	</div>
</body>
</html>