<?php

	include 'admin_header.php';
	include '../controller/D_Controller.php';
	$departments = getAllDepartments();

?>
<div class="d-flex justify-content-center">
    <a class="btn btn-primary me-1 m-3" href="adddepartment.php" role="button">Insert Department</a>
</div>
<div class="center ms-5 me-5 m-3">
	<h3 class="text">All Department</h3>
	<table class="table table-stripad">
		<thead>
			<th>Department ID</th>
			<th>Department Name</th>
			<th></th>
			<th></th>
		</thead>
		</tbody>
			<?php
				$i=1;
				foreach($departments as $d){
					echo "<tr>";
						echo "<td>".$d["depart_id"]."</td>";
						echo "<td>".$d["name"]."</td>";
						echo '<td><a href="editdepartment.php?id='.$d["id"].'"class="btn btn-success">Update</a></td>';
						echo '<td><a class="btn btn-danger disabled">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
		</tbody>
	</table>
</div>

<?php 
	include 'main_footer.php';
?>