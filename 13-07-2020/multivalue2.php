<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<?php
	print_r($_POST);
	?>
	
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 		What's your favorite programming language?<br> (check all that
		apply):<br>


		<select name="languages[]" multiple="multiple">
			 <option value="csharp">C#</option>
			 <option value="javascript">JavaScript</option>
			 <option value="perl">Perl</option>
			 <option value="php" selected>PHP</option>
		</select><br><br>
		<input type="submit" name="submit" value="Submit!">
	</form>


</body>
</html>