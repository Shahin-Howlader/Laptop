<!DOCTYPE html>
<html>
<head>
	<title>Search with Key Word</title>
</head>
<body>

<p>Search the online resources database:<br>
	<form action="" method="post">
	 Keywords:<br>
	 <input type="text" name="keywords" size="20" maxlength="40" value=""><br>
	 <input type="submit" value="Search!">
	</form>
</p>

</body>
</html>

<?php
	 // If the form has been submitted with supplied keywords
	 if (isset($_POST['keywords'])) {
	 // Connect to server and select database
	 $db = new mysqli("localhost", "root", "", "classicmodels");
	 // Create the query
	 $stmt = $db->prepare("SELECT productCode, productName, MSRP FROM products
	 WHERE MATCH(productDescription) AGAINST(?)");
	 $stmt->bind_param('s', $_POST['keywords']);
	 $stmt->execute();
	 $stmt->store_result();
	 // Output retrieved rows or display appropriate message
	 if ($stmt->num_rows > 0) {
	 $stmt->bind_result($prCode, $prName , $msrp);
	 while ($stmt->fetch)
	 echo "Product Code" . $prCode . "Product Name" . $prName . "Retail Price" . $msrp;
	 } else {
	 printf("No results found.");
	 }
	 }
?>