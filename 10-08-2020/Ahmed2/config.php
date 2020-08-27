<?php
$mysqli = new mysqli('localhost', 'root', '', 'divisions_info');
if (mysqli_connect_errno())
{
die('Unable to connect!');
}
?>