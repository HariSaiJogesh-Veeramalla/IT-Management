<?php 
session_start();
include('include/config.php');

include('include/seo.php');

if(isset($_POST['BtnLoginDone']))
{
	$Query = "SELECT * FROM registration
	WHERE email = '".$_POST['email']."' 
	AND password = '".$_POST['password']."' ";
	
	$Result = $Conn->query($Query);

	if($Result)
	{
		foreach ($Result as $Data) 
		{
			session_destroy();
			session_start();
			session_regenerate_id();
			
			$_SESSION['TruckRegID'] = $Data['id'];
			$_SESSION['TruckRegEm'] = $Data['email'];
			
			session_write_close();

			header("location:index.php");
		} 
	}

	$Query = "SELECT * FROM tregister
	WHERE email = '".$_POST['email']."' 
	AND password = '".$_POST['password']."' ";
	
	$Result = $Conn->query($Query);

	if($Result)
	{
		foreach ($Result as $Data) 
		{
			session_destroy();
			session_start();
			session_regenerate_id();
			
			$_SESSION['TruckRegID'] = $Data['id'];
			$_SESSION['TruckRegEm'] = $Data['email'];
			
			session_write_close();

			header("location:index.php");
		} 
	}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <?php include('include/head.php');?>
    </head>
    <body>
		<div class="wrapper">
			<div class="content">
				<div id="form_wrapper" class="form_wrapper">
					<form class="login active" action="" method="POST">
						<h3>Login</h3>
						<div>
							<label>Email:</label>
							<input type="email" name="email" />
							<span class="error">This is an error</span>
						</div>
						<div>
							<label>Password:</label>
							<input type="password" name="password" />
							<span class="error">This is an error</span>
						</div>
						<div class="bottom">
							<div class="remember">
								<input type="checkbox" /><span>Keep me logged in</span>
							</div>
							<input type="submit" name="BtnLoginDone" value="Login"/>
							<a href="pre-register.php" rel="register" class="linkform">You don't have an account yet? Register here</a>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>