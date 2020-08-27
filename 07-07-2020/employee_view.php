<?php
require_once('db_config.php');
	$sql = "SELECT * FROM 'emp_contact_info_view'";
	$result = $mysqli->query($sql, MYSQLI_USE_RESULT);
	WHILE($data = $result->fetch_assoc()){
		
	}
?>
