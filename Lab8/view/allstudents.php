<?php

	include 'admin_header.php';
	include '../controller/S_Controller.php';
	$students = getAllStudents();

?>
<div class="d-flex justify-content-center">
    <a class="btn btn-primary me-1 m-3" href="addstudent.php" role="button">Insert Student</a>
</div>
<div class="center ms-5 me-5 m-3">
	<h3 class="text">All Students</h3>
	<table class="table table-stripad">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Date Of Birth</th>
			<th>Credit</th>
			<th>CGPA</th>
			<th>Department</th>
			<th></th>
			<th></th>
		</thead>
		</tbody>
			<?php
				$i=1;
				foreach($students as $s){
					echo "<tr>";
						echo "<td>".$s["userid"]."</td>";
						echo "<td>".$s["name"]."</td>";
						echo "<td>".$s["dob"]."</td>";
						echo "<td>".$s["credit"]."</td>";
						echo "<td>".$s["cgpa"]."</td>";
						echo "<td>".implode("",getdepartment($s["depart_id"]))."</td>";
						echo '<td><a href="editstudent.php?id='.$s["id"].'"class="btn btn-success">Update</a></td>';
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