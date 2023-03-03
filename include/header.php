<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<div class="container">
<a href="index.php" class="navbar-brand text-warning " style="font-weight:bold">
 	IT Management
</a>
<button class="navbar-toggler " type="button" data-toggle="collapse" 
	data-target="#collapsenavbar">
	<span class="navbar-toggler-icon "></span>
</button>
<div class="collapse navbar-collapse text-center" id="collapsenavbar">
	<ul class="navbar-nav ml-auto">
		<li class="nav-item ">
			<a href="index.php" class="nav-link text-white">Home</a>
		</li>
		
		<li class="nav-item dropdown">
			<a href="#" 
				class="nav-link dropdown-toggle" href="#" 
				id="navbardrop" data-toggle="dropdown" style="color:#fff;">
				Liscnse Tracking
			</a>
			<div class="dropdown-menu">
				<?php
				$Qry = $Conn->query("SELECT * FROM category WHERE status = 1");
				foreach($Qry as $Data)
				{
				?>
				<a class="dropdown-item" href="vehicles.php?cat=<?=$Data['id']?>">
					<?=$Data['category']?>
				</a>
				<?php
				}
				?>
			</div>
		</li>
		
		<li class="nav-item">
			<a href="aboutus.php" class="nav-link text-white">About Us</a>
		</li>

		<li class="nav-item">
			<a href="contact.php" class="nav-link text-white">Contact Us</a>
		</li>

		<?php
		if(empty($_SESSION['TruckRegEm']))
		{
		?>
		<li class="nav-item">
			<button class="btn btn-primary text-white" class="container">
				<a href="login.php" style="text-decoration:none;" class="text-white">
					Login
				</a>
			</button>
		</li>
		<li class="nav-item">
			<button class="btn btn-primary text-white" class="container">
				<a href="pre-register.php" style="text-decoration:none;" class="text-white">Registeration</a>
			</button>
		</li>
		<?php 
		}
		else
		{
		?>
		<li class="nav-item">
			<a href="orders.php" class="nav-link text-white">
				Load Board
			</a>
		</li>
		<li class="nav-item">
			<a href="torders.php" class="nav-link text-white">
				Find Order
			</a>
		</li>

		<li class="nav-item">
			<button class="btn btn-primary text-white" class="container">
				<a href="vehicles.php" style="text-decoration:none;" class="text-white">
					Book Order
				</a>
			</button>
		</li>
			<li class="nav-item">
			<button class="btn btn-primary text-white" class="container">
				<a href="makeorder.php" style="text-decoration:none;" class="text-white">
					Make Order
				</a>
			</button>
		</li>
	<!-- 		<li class="nav-item">
			<button class="btn btn-primary text-white" class="container">
				<a href="logout.php" style="text-decoration:none;" class="text-white">
					Logout
				</a>
			</button>
		</li> -->
		<?php
		}
		?>
	</ul>
</div>
</div>
</nav>