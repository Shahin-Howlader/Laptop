<?php 

$db = new mysqli("localhost", "root", "", "products");
$result = $db->query("SELECT * FROM products_view_2");
echo "<ol>";
while($row = $result->fetch_assoc()){

	echo "<li>Name: " . $row["name"] . "----------".  "Price : "  . $row["price"] . "</li>";
}

echo "</ol>";

?>