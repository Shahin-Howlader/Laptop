<?php 
	if(isset($_POST['submit'])){

		extract($_POST);

		$conn = mysqli_connect("localhost", "root", "", "company");

		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);
		if($queryResult>0){
			echo "Please go";
		}else{
			echo "sorry";
		}




	}
	


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="username"><br>
		<input type="password" name="password"><br>
		<input type="submit" name="submit" value="SUBMIT">
	</form>
</body>
</html>