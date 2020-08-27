<?php
	require_once('db_con.php');
	$id = $_GET['id'];
	$sql = "DELETE FROM products WHERE productCode = '$id'";
	$mysqli->query($sql);
	header("Location: display-products.php");
?>