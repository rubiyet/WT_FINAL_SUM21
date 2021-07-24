<?php
    include 'admin_header.php';
    $id = $_GET["id"];
    include '../controller/D_Controller.php';
    $s = getdepartment($id);
?>

<div class="center ms-5 me-5 m-3">
    <h2 class="text text-center">Update Department</h2>
	<form action="" method="POST" clss="form-horizontal form-material">
        <div class="form-group text-center">
			<h5 class="text">Department ID:</h5>
			<input type="text" name="depart_id" value="<?php echo $s["depart_id"]?>" class="form-control1">
		</div>
        <div class="form-group text-center">
			<h5 class="text">Department Name:</h5>
			<input type="text" name="name" value="<?php echo $s["name"]?>" class="form-control1">
		</div>
		<div class="form-group text-center">
            <div><span class="text-danger"><?php echo $err_db;?></span></div>
			<input type="submit" name="btn_updatedepartment" class="btn btn-success mt-2" value="Update" class="form-control1">
		</div>
	</form>
</div>

<?php 
	include 'main_footer.php';
?>
