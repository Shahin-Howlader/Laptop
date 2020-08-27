<?php


if ($_SERVER["REQUEST_METHOD"] == "SUBMIT") {

    $name = $_POST["name"];
   
    $email = $_POST["email"];

    $address = $_POST["ddess"];

    $phone = $_POST["phone"];

    $gender = $_POST["gender"];

echo "Name :" .$name . "Email :" .$email ."Address :" .$address . "Phone :" .$phone ."Gender :" .$gender;
  
}

?>
