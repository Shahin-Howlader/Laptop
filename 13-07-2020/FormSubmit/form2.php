<?php
// define variables and set to empty values
$nameErr = $emailErr = $ageErr = $phoneErr = "";
$name = $email = $age = $phone = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["phone"])) {
    $phone = "";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if URL address syntax is valid
    if (!preg_match("/^[0-9]*$/",$phone)) {
      $phoneErr = "Invalid Phone number";
    }    
  }

  if (empty($_POST["age"])) {
    $age = "";
  } else {
    $age = test_input($_POST["age"]);
    $ageErr = "Invalid age";
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<?php
echo "<h2>Your Informtion details:</h2>";
echo '<b>Name is: </b>'.$name;
echo "<br>";
echo '<b>Email is: </b>' .$email;
echo "<br>";
echo '<b>Phone number is: </b>'.$phone;
echo "<br>";
echo '<b> Age is: </b>'.$age;


?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Submission</title>
 <style>
	.error {color: #FF0000;}
 </style>

</head>
<body>
	<form action="" method="post">
 		<fieldset>
			<legend>Form Submission</legend>

			<p>Name :</p>
			<input type="text" name="name">
			<span class="error">* <?php echo $nameErr;?></span>
			<br><br>

			<p>Email :</p>
			<input type="text" name="email">
			<span class="error">* <?php echo $emailErr;?></span>
			<br><br>

			<p>Age :</p>
			<input type="text" name="age">
			<span class="error">* <?php echo $ageErr;?></span>
			<br><br>

			<p>Phone :</p>
			<input type="text" name="phone">
			<span class="error">* <?php echo $phoneErr;?></span>
			<br><br>

			<input type="submit" name="submit" value="submit">







		</fieldset>
	</form>

</body>
</html>