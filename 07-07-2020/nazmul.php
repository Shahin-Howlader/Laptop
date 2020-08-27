<?php
	require_once 'db_config.php';
	$query = "SELECT * FROM employee_info_view";
	$data = $db_config->query($query, MYSQLI_USE_RESULT);
?>

<table align="center" cellpadding="10" rules="all" border="1">
	<tr>
		<th>Employee Number</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>City</th>
		<th>Country</th>
	</tr>
	<?php
		WHILE(list($empNumber, $fName, $lName, $city, $country) = $data->fetch_row()){
			?>
				<tr>
					<td><?= $empNumber;?></td>
					<td><?= $fName;?></td>
					<td><?= $lName;?></td>
					<td><?= $city;?></td>
					<td><?= $country;?></td>
				</tr>
			<?php
		};
		$data->free();
	?>
</table>