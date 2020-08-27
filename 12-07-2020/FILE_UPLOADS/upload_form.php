<?php
require('class_file.php');
$file = new File();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php
		if($_SERVER['REQUEST_METHOD']== 'POST'){

		if($_FILES['myfile']['error']== 0){

		$file->uploadFile($_FILES['myfile']);

	} else{
		echo "Selected a file then try";
		}

	}

?>


<form action="upload_form.php" enctype="multipart/form-data" method="post">
	 <label form="email">Email:</label><br>
	 <input type="text" name="email" value=""><br>
	 <label form="lastname">Last Name:</label><br>
	 <input type="text" name="lastname" value=""><br>
	 <label form="classnotes">Class notes:</label><br>
	 <input type="file" name="myfile" value=""><br>
	 <input type="submit" name="submit" value="Submit Notes">
</form>

</body>
</html>