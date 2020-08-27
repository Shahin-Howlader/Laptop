<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$fName = $_POST['Fname'];
		$lName = $_POST['Lname'];

		if (!empty($fName) || !empty($lName)) {
			$dbCon = new mysqli('localhost', 'root', '', 'test');
			$query = $dbCon->query("INSERT INTO employee VALUES ('$fName', '$lName')");

			if ($query) {
				echo json_encode(array("statusCode"=>200));
			} else {
				echo json_encode(array("statusCode"=>201));
			}
		}
	}
?>
