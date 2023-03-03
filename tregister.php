<?php 
session_start();
include('include/config.php');

if(isset($_POST['Btnregistered']))
{
	$Query = "INSERT INTO tregister (id,name,email,password,company,phone,city,status)
	VALUES(Null, '".$_POST['name']."','".$_POST['email']."', 
	'".$_POST['password']."', '".$_POST['company']."',
	'".$_POST['phone']."', '".$_POST['city']."',1)";

	$Conn->query($Query);

	header("location:login.php?msg=Successful");
}
?>
<!DOCTYPE html>
<html>
    <head>
    	<title>Registration</title>
        <?php include('include/head.php');?>
    </head>
    <body>
		<div class="wrapper">
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
					<form method="POST" name="" action="" class="register active">
						<h3>Trucker Registeration</h3>
						<div class="column">
							<div>
								<label>Name:</label>
								<input type="text" required="" name="name" />
								
							</div>
							<div>
								<label>Email:</label>
								<input type="email" required="" name="email" />
								
							</div>
							<div>
								<label>Phone:</label>
								<input type="text" required="" name="phone" />
								
							</div>
						</div>
						<div class="column">
							<div>
								<label>Company:</label>
								<input type="text" required="" name="company" />
								
							</div>
							<div>
								<label>Password:</label>
								<input type="password" required="" name="password" />
								
							</div>
							<div>
								<label>City:</label>
								<input type="text" required="" name="city" />
								
							</div>
						</div>
						<div class="bottom">
							<div class="remember">
								<input type="checkbox" required="" />
								<span>Send me updates</span>
							</div>
							<input type="submit" name="Btnregistered" value="Register" />
							<a href="login.php" rel="login" class="linkform">You have an account already? Log in here</a>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>




<!-- <?php 
session_start();
include('include/config.php');

if(isset($_POST['BtnRegist']))
{
	$Query = "INSERT INTO tregister (id,name,email,password,company,phone,city,status)
	VALUES(Null, '".$_POST['name']."','".$_POST['email']."', 
	'".$_POST['password']."', '".$_POST['company']."',
	'".$_POST['phone']."', '".$_POST['city']."',1)";

	$Conn->query($Query);

	header("location:login.php?msg=Successful");
}
?>
<!DOCTYPE html>
<html>
    <head>
    	<title>Registration</title>
        <?php include('include/head.php');?>
    </head>
    <body>
		<div class="wrapper">
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
					<form method="POST" name="" action="" class="register active">
						<h3>Trucker Registeration</h3>
						<div class="column">
							<div>
								<label>Name:</label>
								<input type="text" required="" name="name" />
						</div>
							<div>
								<label>Email:</label>
								<input type="email" required="" name="email" />
						</div>
							<div>
								<label>Phone:</label>
								<input type="text" required="" name="phone" />
						</div>
						</div>
						<div class="column">
							<div>
								<label>Company:</label>
								<input type="text" required="" name="company" />
						</div>
							<div>
								<label>Password:</label>
								<input type="password" required="" name="password" />
						</div>
							<div>
								<label>City:</label>
								<input type="text" required="" name="city" />
						</div>
						</div>
						<div class="bottom">
							<div class="remember">
								<input type="checkbox" required="" />
								<span>Send me updates</span>
							</div>
							<input type="submit" name="BtnRegist" value="Register" />
							<a href="login.php" rel="login" class="linkform">You have an account already? Log in here</a>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html> -->