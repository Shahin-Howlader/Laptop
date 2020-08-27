
<?php


if ($_SERVER["REQUEST_METHOD"]=='POST') {

	$em11 = $_POST['em1'];
	$em22 = $_POST['em2'];

	if (empty($em11 || $em22)) {
		$msg = 'Email is Required';
	} elseif (!filter_var($em11, FILTER_VALIDATE_EMAIL)) {
		$msg = 'Email Not Validated';
	} elseif ($em11 !== $em22) {
		$msg = 'Email Not matched';
	}else{
		$msg = 'Email Validated';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Validation</title>
</head>
<body>
	<form action="" method="POST">
		<fieldset>
			<legend>Email Valaidation</legend>
			<h1><?php if (isset($msg)) {echo $msg;} ?></h1>
			<input type="text" name="em1">
			<input type="text" name="em2">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>

