<?php 
include_once('db.php');
$round = $_GET['round'];

$query = mysqli_query($db,"SELECT * FROM `students` WHERE `round` = '$round'");
while ($result = mysqli_fetch_array($query)) {
	echo "<option value='". $result['name'] ."'>". $result['name'] ."</option>";
}










 ?>