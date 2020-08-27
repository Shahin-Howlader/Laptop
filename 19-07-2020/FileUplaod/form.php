<?php
require('uploadForm.php');
$file = new FileUplaod();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Uplaod</title>
</head>
<body>

<?php
		if($_SERVER['REQUEST_METHOD']== 'POST'){

		if($_FILES['myFile']['error']== 0){

		$file->FileToUpload($_FILES['myFile']);

	} else{
		echo "Selected a file then try";
		}

	}

?>
	<form method="post" enctype="multipart/form-data" action="">
		<fieldset>
			<legend>File Upload</legend>
			<input type="file" name="myFile">
			<input type="submit" name="submit" value="Upload">
		</fieldset>
	</form>

</body>
</html>