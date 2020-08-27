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