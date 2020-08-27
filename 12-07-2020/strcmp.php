<?php
 $pswd = "supersecret";
 $pswd2 = "Supersecret";

 echo "Difference is :".strcmp($pswd, $pswd2) . "<br>";
 if (strcmp($pswd, $pswd2) != 0) {
 echo "Passwords do not match!";
 } else {
 echo "Passwords match!";
 }
?>