<?php
	//test
	//  print_r($_POST);
	//database connection
	$conn = mysqli_connect("localhost", "root", "", "test");
	//stroing form values
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	//database insert command
	$sql = "INSERT INTO employee VALUES('', '$fname', '$lname')";
	//message if data insert of failed
	if(mysqli_query($conn, $sql)){
	  echo "Record succcessfully Inserted....!!!";
	}else{
	  echo mysqli_error();
	}

?>