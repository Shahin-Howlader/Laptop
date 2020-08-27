<?php
	
$pass = 'monir';
$enc= md5($pass);
echo $enc;
echo "<hr>";
echo "The Length is: ".strlen($enc);

?>