<?php

	include 'main_header.php';
	include '../controller/U_Controller.php';

?>

<div class="center-login">
	<h2 class="text text-center">Login</h2>
    <h5 class="text-danger text-center"><?php echo $err_db;?></h5>
	<form action="" method="POST" class="form-horizontal form-material">
		
		<div class="form_group text-center">
			<h5 class="text">UserName</h5>
			<input type="text" name="uname" value="<?php echo $uname;?>" class="form-control1">
			<div><span class="text-danger"><?php echo $err_uname;?></span></div>
		</div>
		<div class="form-group text-center">
			<h5 class="text">Password</h5>
			<input type="password" name="pass" class="form-control1">
            <div><span class="text-danger"><?php echo $err_pass;?></span></div>
		</div>
        <div></div>
		<div class="form-group text-center">
			<input type="submit" name="btn_login" class="btn btn-danger mt-2" value="Login" class="form-control">
		</div>
	</form>
</div>

<?php 
    include 'main_footer.php';
?>
