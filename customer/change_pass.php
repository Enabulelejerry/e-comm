<h3 class="text-center"> Change Password </h3>

<form action="" method="post" enctype="multipart/form-data"><!-- form begin -->
	<div class="form-group"><!-- form-group begin -->
		<label> Your Old Password: </label>
		<input type="text" name="old_pass" class="form-control" required>
	</div><!-- form-group end -->

	<div class="form-group"><!-- form-group begin -->
		<label> Your New Password: </label>
		<input type="text" name="new_pass" class="form-control" required>
	</div><!-- form-group end -->

	<div class="form-group"><!-- form-group begin -->
		<label> Confirm Your New Password: </label>
		<input type="text" name="new_pass_again" class="form-control" required>
	</div><!-- form-group end -->

	<div class="text-center">
		<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Update Now</button>
	</div>
</form><!-- form end -->