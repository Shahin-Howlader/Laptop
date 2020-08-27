<?php
	
	$deletedid = $_GET['deletedid'];
	if($deletedid){
		$conn = mysqli_connect("localhost", "root", "", "products") or die("Connection Failed : " . mysqli_connect_error());
		$sql = "DELETE FROM manufacturer WHERE id = $deletedid";
		$result = mysqli_query($conn, $sql);
		mysqli_close($conn);
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
	<?php

		 $conn = mysqli_connect("localhost", "root", "", "products") or die("Connection Failed : " . mysqli_connect_error());
		 $sql = "SELECT id, name FROM manufacturer";
		 $result = mysqli_query($conn, $sql);

	?>
	<form action="#" method="get">
		<label for="">Manufacturer</label>
		<select name="deletedid">
			<?php while($row = mysqli_fetch_array($result)){ ?>
			<option value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
		<?php } ?>
		</select>
		<br>
		<input type="submit" name="delete" value="Delete">
	</form>
</body>
</html>