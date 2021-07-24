<?php
    include 'admin_header.php';
    include '../controller/S_Controller.php';
    $d = getAllDepartments();
?>

<div class="center ms-5 me-5 m-3">
    <h2 class="text text-center">Insert Student</h2>
	<form action="" method="POST" clss="form-horizontal form-material">
		<div class="form-group text-center">
			<h5 class="text">ID:</h5>
			<input type="text" name="userid" value="<?php echo $userid?>" class="form-control1">
            <div><span class="text-danger"><?php echo $err_userid;?></span></div>
		</div>
        <div class="form-group text-center">
			<h5 class="text">Name:</h5>
			<input type="text" name="name" value="<?php echo $name?>" class="form-control1">
            <div><span class="text-danger"><?php echo $err_name;?></span></div>
		</div>
        <div class="form-group text-center">
			<h5 class="text">Date of Birth:</h5>
			<input type="text" name="dob" value="<?php echo $dob?>" class="form-control1">
            <div><span class="text-danger"><?php echo $err_dob;?></span></div>
		</div>
        <div class="form-group text-center">
			<h5 class="text">Credit:</h5>
			<input type="text" name="credit" value="<?php echo $credit?>" class="form-control1">
            <div><span class="text-danger"><?php echo $err_credit;?></span></div>
		</div>
        <div class="form-group text-center">
			<h5 class="text">CGPA:</h5>
			<input type="text" name="cgpa" value="<?php echo $cgpa?>" class="form-control1">
            <div><span class="text-danger"><?php echo $err_cgpa;?></span></div>
		</div>
        <div class="form-group text-center">
			<h5 class="text">Department:</h5>
            <select name="depart_id" class="form-control1 ps-5 pe-4"><option disabled selected>Department</option><?php foreach($d as $d1){if($d1["depart_id"] == $depart_id) echo "<option selected>$d1[depart_id]</option>"; else echo "<option>$d1[depart_id]</option>";}?></select> 
            <div><span class="text-danger"><?php echo $err_depart_id;?></span></div>
		</div>
		<div class="form-group text-center mt-3">
            <div><span class="text-danger"><?php echo $err_db;?></span></div>
			<input type="submit" name="btn_insertstudent" class="btn btn-success mt-2" value="Insert" class="form-control">
		</div>
	</form>
</div>

<?php 
	include 'main_footer.php';
?>
