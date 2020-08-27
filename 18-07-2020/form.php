
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="action.php" method="post">
		<fieldset>
			<legend>Form</legend>
			Name : <input type="text" name="name" placeholder="Input your name" value="<?php echo $name;?>"><br><br>
			Email : <input type="text" name="email" placeholder="Input your email" value="<?php echo $email;?>"><br><br>
			Phone : <input type="text" name="number" placeholder="Input your number" value="<?php echo $phone;?>"><br><br>
			Address : <textarea cols="20" rows="10" name="ddress"><?php echo $addrss;?></textarea><br><br>
			Gender : 
			<input type="radio" name="gender" value="Male" <?php if (isset($gender) && $gender=="female") echo "checked";?>>Male
			<input type="radio" name="gender" value="Feale">Female <br><br>
			
			<input type="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>