<?php 
session_start();
include('include/config.php');

include('include/seo.php');

if(empty($_SESSION['TruckRegEm']))
{
	header("location:login.php?mes=LoginRequired");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<?php include('include/head.php');?>	
</head>
<body>
<div class="bgimg">
	<?php include('include/header.php');?>
	<div class=" headerset text-warning  ">
		<h2> Book Order</h2><br>
			<ul>
				<li><input  type="text" name="P-Address" placeholder="PICK UP LOCATION"></li><br>
				<li><input  type="text" name="D-Address" placeholder="DROP OFF LOCATION"></li>
			
			</ul>
			<button class="btn btn-primary text-white">
				<a href="orderform.html" class="text-white">Book</a>
			</button>
	</div>
	<section class="container ourservices text-center">
		<h1 class="headtext" style="margin-top: 120px;"><u>SERVICES</u></h1>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto" >
					<div class="imgsetting d-block m-auto bg-primary"> 
						<i class="fa fa-truck fa-10x text-white"></i>
					</div>
						<h2 class="headtext">Full Load Service</h2>
							<p>We provide Full Truck load transportation services with varied type of trucks available with the click of a button.</p>
				</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto"  >
			<div class="imgsetting d-block m-auto bg-primary"> 
				<i class="fa fa-truck fa-10x text-white"></i>
			</div>
			<h2 class="headtext">Full Load Service</h2>
			<p>We provide Full Truck load transportation services with varied type of trucks available with the click of a button.</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto"  >
			<div class="imgsetting d-block m-auto bg-primary"> 
				<i  class="fa fa-truck text-white"></i>
			</div>
			<h2 class="headtext">Full Load Service</h2>
			<p>We provide Full Truck load transportation services with varied type of trucks available with the click of a button.</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto"  >
			<div class="imgsetting d-block m-auto bg-primary"> 
				<i class="fa fa-truck fa-10x text-white"></i>
			</div>
			<h2 class="headtext">Full Load Service</h2>
			<p>We provide Full Truck load transportation services with varied type of trucks available with the click of a button.</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto"  >
			<div class="imgsetting d-block m-auto bg-primary"> 
				<i class="fa fa-truck fa-10x text-white"></i>
			</div>
			<h2 class="headtext">Full Load Service</h2>
			<p>We provide Full Truck load transportation services with varied type of trucks available with the click of a button.</p>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-12 d-block m-auto"  >
			<div class="imgsetting d-block m-auto bg-primary"> 
				<i class="fa fa-truck fa-10x text-white"></i>
			</div>
			<h2 class="headtext">Full Load Service</h2>
			<p>We provide Full Truck load transportation services with varied type of trucks available with the click of a button.</p>
		</div>
		
	</div>
</section>
	<!-- .......................................................Advatages and Benefits..................................................................................................................................................................................................................................... -->
<section class="container Advatages bg-light">
	<h1 class="headtext text-center"><u>BENEFITS</u></h1>
	<div class="row">
		<div class="col-lg-5 col-md-5 col-sm-5 col-10 d-block m-auto">
			<div>
				<h3><u>Shippers</u></h3>
				
				<p>Access to all type of trucks under Single Roof</p>
				<p>Shipment planning in proper process flows</p>
				<p>Proof of delivery upload from the field</p>
				<p>Online Invoicing, Transportation spending per KM and many more analytics</p>
			</div>
		</div>
		<div class="col-lg-5 col-md-5 col-sm-5 col-10 d-block m-auto" >
			<div>
				
				<h3><u>Carriers</u></h3>
				
				<p>Continuous shipments and workload for the carriers</p>
				<p>Instant Payment Settlement upon delivery of job orders</p>
				<p>Lower Fleet Idle-time</p>
				<p>Per Km earning reports & other analytics</p>
			</div>
		</div>

	</div>
	</section>
	<!-- ///////////////////////////////////////OUR CUSTOMER///////////////////////////////// -->
<section class="ourcustomers Advatages">
	<div class="container text-center">
		<h1 class="headertext"><u><b>OUR CUSTOMERS</b></u></h1>
		<div class="row">
					<div class="col-lg-3 col-md-
					3 col-sm-3 col-12 d-block m-auto">
						<figure class="figure margintop">
		<img src="Images/pepsilogo.png" class="figure-img img-fluid rounded-circle " height="210px" width="210px">
							<figcaption>
								<p class="figure-caption">Pepsi</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-
					3 col-sm-3 col-12 d-block m-auto">
						<figure class="figure margintop">
		<img src="Images/foujifertilizerlogo.jpg" class="figure-img img-fluid rounded-circle " height="210px" width="210px">
							<figcaption>
								<p class="figure-caption">Fouji Fertilizer</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-
					3 col-sm-3 col-12 d-block m-auto">
						<figure class="figure margintop">
		<img src="Images/psologo.png" class="figure-img img-fluid rounded-circle " height="210px" width="210px">
							<figcaption>
								<p class ="figure-caption">PSO</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-3 col-md-
					3 col-sm-3 col-12 d-block m-auto">
						<figure class="figure margintop">
		<img src="Images/Engrologo.jpg" class="figure-img img-fluid rounded-circle " height="210px" width="210px">
							<figcaption>
								<p class="figure-caption">Engro</p>
							</figcaption>
						</figure>
					</div>
				

		</div>
	</div>
</section>
<!-- ///////////////////////////////////////////////Footer///////////////////////////////// -->

<div>
	<footer class="footer-distributed">
			<div class="footer-left">
      				<h2><span class="text-warning" >Orderloader</span></h2>
      				<p class="footer-company-about">
					<span>About the company</span>
					Orderload, a leading transport and logistics service provider is introducing a truly innovative, modern and high-tech online platform to book the truck in a few simple steps.</p><br>

				<p class="footer-links">
					<a href="#">Home</a>
					|
					<a href="#">Services</a>
					|
					<a href="#">About</a>
					|
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">© Orderloader.com | Designed by Orderloader </p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>Chaburji choke, Lahore</span></p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+923037691932</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@eduonix.com">support@orderloader.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				
				<div class="footer-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
		</footer>
</div>
</body>
</html>