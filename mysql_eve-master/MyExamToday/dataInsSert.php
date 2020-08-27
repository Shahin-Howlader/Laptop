<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO manufacturer (name, address, contact_no)
VALUES ('John', 'Doe', 'john@example.com', '019252')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>