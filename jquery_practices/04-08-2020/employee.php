<?php

$code = $_REQUEST['office'];
$db = new mysqli("localhost", "root", "", "classicmodels");
$query = $db->query("SELECT employeeNumber, lastName, firstName, jobTitle FROM employees WHERE officeCode ='$code'");

if($query->num_rows>0){ ?>

<table border="1">
	<tr>
		<th>Number</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Job Title</th>
		
	</tr>

	
<?php
while($row= $query->fetch_assoc()){ ?>

	<tr>
		<td><?php echo $row['employeeNumber']; ?></td>
		<td><?php echo $row['firstName']; ?></td>
		<td><?php echo $row['lastName']; ?></td>
		<td><?php echo $row['jobTitle']; ?></td>
		
	</tr>

<?php }

?>
	</table>

	<?php 
} else{
	echo "No Data Found";
}

	 ?>