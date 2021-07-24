<?php
    include 'admin_header.php';
    include '../controller/D_Controller.php';
?>

<div class="center ms-5 me-5 m-3">
    <h2 class="text text-center">Insert Department</h2>
	<form action="" method="POST" clss="form-horizontal form-material">
		<div class="form-group text-center">
			<h5 class="text">Department ID:</h5>
			<input type="text" name="depart_id" value="<?php echo $depart_id?>" class="form-control1">
            <div><span class="text-danger"><?php echo $err_depart_id;?></span></div>
		</div>
        <div class="form-group text-center">
			<h5 class="text">Department Name:</h5>
			<input type="text" name="name" value="<?php echo $name?>" class="form-control1">
            <div><span class="text-danger"><?php echo $err_name;?></span></div>
		</div>
		<div class="form-group text-center mt-3">
            <div><span class="text-danger"><?php echo $err_db;?></span></div>
			<input type="submit" name="btn_insertdepartment" class="btn btn-success mt-2" value="Insert" class="form-control">
		</div>
	</form>
</div>

<?php 
	include 'main_footer.php';
?>
