<?php
$name = htmlspecialchars($_POST["fname"]);
$lname = htmlspecialchars($_POST["lname"]);
echo "Hi, $name $lname. Your comment has been received successfully." . "";
echo "Here's the comment what you've entered: $lname";
?>