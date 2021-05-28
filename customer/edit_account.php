<h3 class="text-center">Edit Your Account</h3>

<form action="" method="post" enctype="multipart/form-data"><!-- form begin -->
	<div class="form-group"><!-- form-group begin -->
		<label> Customer Name: </label>
		<input type="text" name="c_name" class="form-control" required>
	</div><!-- form-group end -->

	<div class="form-group"><!-- form-group begin -->
		<label> Customer Email: </label>
		<input type="text" name="c_email" class="form-control" required>
	</div><!-- form-group end -->

	<div class="form-group"><!-- form-group begin -->
		<label> Customer Country: </label>
		<input type="text" name="c_country" class="form-control" required>
	</div><!-- form-group end -->

	<div class="form-group"><!-- form-group begin -->
		<label> Customer City: </label>
		<input type="text" name="c_city" class="form-control" required>
	</div><!-- form-group end -->

	<div class="form-group"><!-- form-group begin -->
		<label> Customer Contact: </label>
		<input type="text" name="c_contact" class="form-control" required>
	</div><!-- form-group end -->

	<div class="form-group"><!-- form-group begin -->
		<label> Customer Image: </label>
		<input type="file" name="c_image" class="form-control" required>
		<img src="customer_images/chelsea2.jpg" class="img-fluid">
	</div><!-- form-group end -->

	<div class="text-center">
		<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Update Now</button>
	</div>
</form><!-- form end -->