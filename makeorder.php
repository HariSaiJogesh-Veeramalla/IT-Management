<?php 
session_start();
include('include/config.php');

if(isset($_POST['Btnplaceorder']))
{
	$Query = "INSERT INTO torder(id, v_category, f_charges, pic, p_loc, d_loc, phone, loadtype, description, loadlimit, status)
	
	VALUES(Null, 
	'".$_POST['v_category']."',
	'".$_POST['f_charges']."', 
	'".$_POST['PIC']."',
	'".$_POST['p_loc']."',
	'".$_POST['d_loc']."', 
	'".$_POST['phone']."',
	'".$_POST['loadtype']."',
	'".$_POST['description']."',
	'".$_POST['load_limit']."',1)";

	$Conn->query($Query);

	header("location:torders.php?msg=Successful");
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Trucker Order</title>
	<?php include('include/head.php');?>	
</head>
<body>
<div style="background-color:#fff ;">
	<?php include('include/header.php');?>
</div>

<div class="container-fluid">
	<div class="card shadow mb-4">
  		<div class="card-body">
    		<div class="table-responsive">
      			<div class="modal-header">
			        <h2 class="modal-title" id="exampleModalLabel">Add Details</h2>
			    </div>
	  <form method="POST" action="" >
			        <div class="modal-body">
			            <div class="row " style="margin-left: 55px">
			            		<div class="col-md-6">
			            		<div class="form-group">
					                <label> Pickup Location  </label>
					                <input type="text" required="" name="p_loc"  placeholder="PICK UP LOCATION" style="width: 500px; margin-left: 0px"  class="form-control">
					            </div>		
			            	</div>
			            	<div class="col-md-6">
			            		<div class="form-group">
					                <label> Drop off Location </label>
					                <input type="text" required="" name="d_loc" placeholder="DROP OFF LOCATION" 
					                class="form-control"  style="width: 500px; margin-left: 0px">
					            </div>		
			            	</div>
			            	<div class="col-md-6">
			            		<div class="form-group">
					                <label> Vehicle Category </label>
					                <select name="v_category"  required="" class="form-control select" style="width: 500px; margin-top: 5px; margin-left: 0px ">
					                	<option name=">Heavy Duty Loader">Heavy Duty Loader</option>
					                	<option name="Medium Loader">Medium Loader</option>
					                	<option name="Mini Loader">Mini Loader</option>
					                	
					               
					                </select>
					            </div>		
			            	</div>
			            	<div class="col-md-6">
			            		<div class="form-group">
					                <label>  Freight Charges </label>
					                <input type="text" required="" name="f_charges" style="width: 500px; margin-left: 0px"  class="form-control">
					            </div>		
			            	</div>
			            	<div class="col-md-6">
			            		<div class="form-group">
					                <label> Phone No. </label>
					                <input type="text" required="" name="phone" 
					                class="form-control"  style="width: 500px; margin-left: 0px">
					            </div>		
			            	</div>
			            	
			            	<div class="col-md-6">
			            		<div class="form-group">
			            			<label>Load Type</label>
							 <select class="select" name="loadtype" style="width: 500px; margin-left: 0px">

							        <option name="">select load type</option>
							        <option name="Home Furniture"> Home Furniture </option>
							        <option name="Office Equipment"> Office Equipment </option>      
							        <option name="Agriculture"> Agriculture  </option>
							        <option name="Industrial Goods"> Industrial Goods </option>
							        <option name="Others"> Others </option>
							  </select>
								   </div>		
			            	</div>
			            	<div class="col-md-6">
			            		<div class="form-group">
					                <label>  Load Limit </label>
					                <input type="text" required="" name="load_limit" style="width: 500px; margin-left: 0px"  class="form-control">
					            </div>		
			            	</div>
			            	<div class="col-md-6">
					            <div class="form-group">
					                <label> Description </label>
					                <textarea name="description"  placeholder="optional" class="select" rows="2" style="width: 500px; margin-left: 0px" 
					                class="form-control"></textarea>
					            </div>
			            	</div>
			            	<div class="col-md-4">
					            <div class="form-group">
					                <label> Picture (772X960px)</label>
					                <input type="file" required="" name="PIC"  
					                value="Change PIC" class="form-control" class="select" style="margin-left: 0px; float: right;">
					            </div>
			        		</div>
			          </div>
			        </div>
			        <div class="modal-footer">
			            <input type="submit" name="Btnplaceorder" value="Place Order" class="btn btn-primary">
			        </div>
	  </form>
			   
    		</div>
  		</div>
	</div>
</div>


<div>
		<?php include('include/footer.php');  ?>
	</div>

</body>
</html>