<?php
    include 'admin_header.php';
    $id = $_GET["id"];
    include '../controller/S_Controller.php';
    $s = getStudent($id);
    $depart_id = $s["depart_id"];
    $d = getAllDepartments();
?>

<div class="center ms-5 me-5 m-3">
    <h2 class="text text-center">Update Student</h2>
	<form action="" method="POST" clss="form-horizontal form-material">
		<div class="form-group text-center">
			<h5 class="text">ID:</h5>
			<input type="text" name="userid" value="<?php echo $s["userid"]?>" class="form-control1">
		</div>
        <div class="form-group text-center">
			<h5 class="text">Name:</h5>
			<input type="text" name="name" value="<?php echo $s["name"]?>" class="form-control1">
		</div>
        <div class="form-group text-center">
			<h5 class="text">Date of Birth:</h5>
			<input type="text" name="dob" value="<?php echo $s["dob"]?>" class="form-control1">
		</div>
        <div class="form-group text-center">
			<h5 class="text">Credit:</h5>
			<input type="text" name="credit" value="<?php echo $s["credit"]?>" class="form-control1">
		</div>
        <div class="form-group text-center">
			<h5 class="text">CGPA:</h5>
			<input type="text" name="cgpa" value="<?php echo $s["cgpa"]?>" class="form-control1">
		</div>
        <div class="form-group text-center">
			<h5 class="text">Department:</h5>
            <select name="depart_id" class="form-control1 ps-5 pe-4"><option disabled selected>Department</option><?php foreach($d as $d1){if($d1["depart_id"] == $depart_id) echo "<option selected>$d1[depart_id]</option>"; else echo "<option>$d1[depart_id]</option>";}?></select> 
		</div>
		<div class="form-group text-center">
            <div><span class="text-danger"><?php echo $err_db;?></span></div>
			<input type="submit" name="btn_updatestudent" class="btn btn-success mt-2" value="Update" class="form-control1">
		</div>
	</form>
</div>

<?php 
	include 'main_footer.php';
?>
