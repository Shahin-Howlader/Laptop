


<!DOCTYPE html>
<html>
<head>
	<title>Emil Vlidtion</title>
</head>
<body>
	<form action="" method="post">
		<fieldset>
			<legend>Emil Vlidtion</legend>
			<h1><?php if(isset($msg)){echo $msg;} ?></h1>
			<input type="text" name="email1"><br><br>
			<input type="text" name="email2"><br><br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

<?php


	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["email1"]) || empty($_POST["email2"])) {
    $msg = "Email is required";

  } elseif (!filter_var($_POST["email1"], FILTER_VALIDATE_EMAIL)) {
  	$msg= "Email Not Validated";

  } elseif($_POST["email1"] !== $_POST["email2"]){
  	$msg = 'Email does not match';

  }else {
  	$msg = 'Validated';
    
    	}
	}
?>

</body>
</html>