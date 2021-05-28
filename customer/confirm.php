<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keyword" content="">
	<link rel="stylesheet" type="text/css" href="fonts/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
	<div id="top"><!-- Top Begin -->
		<div class="container"><!-- Container Begin -->
			<div class="row"><!-- Row Begin -->
				<div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
					<a href="" class="btn btn-success btn-sm">Welcome</a>
					<a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>
				</div><!-- col-md-6 offer End -->
				<div class="col-md-6"><!-- col-md-6 Begin -->
					<ul class="menu"><!-- menu Begin -->
						<li>
							<a href="../customer_register.php">Register</a>
						</li>
						<li>
							<a href="my_account.php">My Account</a>
						</li>
						<li>
							<a href="../cart.php">Go To Cart</a>
						</li>
						<li>
							<a href="../checkout.php">Login</a>
						</li>
					</ul><!-- menu End -->
				</div><!-- col-md-6 End -->
		    </div><!-- Row End -->
		</div><!-- Container End -->
	</div><!-- Top End -->
	<nav id="navbar" class="navbar navbar-expand-md navbar-dark"><!--  navbar-expand-md begin -->
		<div class="container">
    	  <a href="../index.php" class="navbar-brand home">VICSTORES</a> 
	       
	      <button class="navbar-toggler bg-dark mr-4" type="button" data-toggle="collapse" data-target="#search" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle navigation">
	        <span> <i class="fa fa-search"></i></span>
	      </button>

	      <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	       <div class="collapse navbar-collapse" id="navbarsExampleDefault">
	           <ul class="nav navbar-nav">
	              <li class="nav-item">
	                <a class="nav-link" href="../index.php">Home</a>
	              </li>  
	               <li class="nav-item">
	                <a class="nav-link" href="../shop.php">Shop</a>
	              </li> 
	              <li class="nav-item active">
	                <a class="nav-link" href="my_account.php">My Account</a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link" href="../cart.php">Shopping Cart</a>
	              </li>
	              <li class="nav-item">
	                <a class="nav-link" href="../contact.php">Contact Us</a>
	              </li>
	           </ul>
	        </div>
	        <div class="ml-auto d-flex">
		        <div class="collapse navbar-collapse mr-3">
		        	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
		        		<i class="fa fa-search"></i>
		        	</button>
		        </div>
		        <a href="cart.php" class="btn navbar-btn btn-primary">
		        	<i class="fa fa-shopping-cart"></i>
		        	<span>4 Items In Your Cart</span>
		        </a>
	        </div>

	        <div class="collapse clearfix" id="search">
	        	<form method="get" action="result.php" class="navbar-form">
	        		<div class="input-group d-flex">
	        			<input type="text" class="form-control" placeholder="Search" name="user_query" required>
	        			<button type="submit" name="search" class="btn btn-primary"><i class="fa fa-search"></i></button>
	        		</div>
	        	</form>
	        </div>
        </div>
    </nav><!--  navbar-expand-md end -->

    <div id="content"><!-- #content begin -->
    	<div class="container"><!-- container begin -->
    		<div class="row"><!-- row begin -->
    			<div class="col-md-12"><!-- col-md-12 begin -->
    				<ul class="breadcrumb"><!-- breadcrumb begin -->
    					<li>
    						<a href="index.php">Home</a>
    					</li>
    					<li>
    						My Account
    					</li>
    				</ul><!-- breadcrumb end -->
    			</div><!-- col-md-12 end -->
                
                <div class="col-md-3"><!-- col-md-3 begin -->
                	<?php
                     include("includes/sidebar.php");
                	?>
                </div><!-- col-md-3 end -->

                <div class="col-md-9"><!-- col-md-9 begin -->
                	<div class="box"><!-- box begin -->
                		<h3 class="text-center">Please confirm your payment</h3>
                		<form action="confirm.php" method="post" enctype="multipart/form-data"><!-- form begin -->

                			<div class="form-group"><!-- form-group begin -->
                				<label> Invoice No: </label>
                				<input type="text" class="form-control" name="invoice_no" required>
                			</div><!-- form-group end -->

                			<div class="form-group"><!-- form-group begin -->
                				<label> Amount Sent: </label>
                				<input type="text" class="form-control" name="amount_sent" required>
                			</div><!-- form-group end -->

                			<div class="form-group"><!-- form-group begin -->
                				<label> Select Payment Mode: </label>
                				<select name="payment_mode" class="form-control"><!-- form-control begin -->
                					<option> Select Payment Mode </option>
                					<option> Back Code </option>
                					<option> UBL / Omni Paisa </option>
                					<option> Easy Paisa </option>
                					<option> Western Union </option>
                				</select><!-- form-control end -->
                			</div><!-- form-group end -->

                			<div class="form-group"><!-- form-group begin -->
                				<label> Transaction / Reference ID: </label>
                				<input type="text" class="form-control" name="ref_no" required>
                			</div><!-- form-group end -->

                			<div class="form-group"><!-- form-group begin -->
                				<label> Omni Paisa / East Paisa: </label>
                				<input type="text" class="form-control" name="code" required>
                			</div><!-- form-group end -->
                			<div class="form-group"><!-- form-group begin -->
                				<label> Payment Date: </label>
                				<input type="text" class="form-control" name="date" required>
                			</div><!-- form-group end -->
                			<div class="text-center">
                				<button class="btn btn-primary btn-lg"><i class="fa fa-user-md"></i>Confirm Payment</button>
                			</div>
                		</form><!-- form end -->
                	</div><!-- box end -->
                </div><!-- col-md-9 end -->
            </div><!-- row end -->
    	</div><!-- container end -->
    </div><!-- #content end -->


    <?php
    include("includes/footer.php");
    ?>










<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>