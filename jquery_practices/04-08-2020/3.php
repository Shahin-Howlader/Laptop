<?php

$code = $_REQUEST['code'];
$db = new mysqli("localhost", "root", "", "classicmodels");
$query = $db->query("SELECT employeeNumber, lastName, firstName, jobTitle FROM employees WHERE officeCode ='$code'");
//echo $query->num_rows;
?>
	<table border="1">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Number</th>
	</tr>
<?php
while($row=mysqli_fetch_array($query)){

	?>

	<tr>
		<td><?php echo $row['firstName']; ?></td>
		<td><?php echo $row['lastName']; ?></td>
		<td><?php echo $row['employeeNumber']; ?></td>
	</tr>

<?php }

?>
	</table>