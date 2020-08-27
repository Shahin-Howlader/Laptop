<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 		What's your favorite programming language?<br> (check all that
		apply):<br>
	 <input type="checkbox" name="languages[]" value="csharp">C#<br>
	 <input type="checkbox" name="languages[]" value="javascript">JavaScript
	<br>
	 <input type="checkbox" name="languages[]" value="perl">Perl<br>
	 <input type="checkbox" name="languages[]" value="php">PHP<br>
	 <input type="submit" name="submit" value="Submit!">
</form>

</body>
</html>