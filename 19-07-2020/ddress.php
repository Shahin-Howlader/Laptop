<?php

$fileOpen= fopen('text.txt', 'w');

$data = ['Monir' => 'monir@gmail.com','Tuhin' => 'tuhin@gmail.com','Shahin' => 'shahin@gmail.com'];

foreach ($data as $name => $email) {
	fwrite($fileOpen, "$name $email \n");
}
fclose($fileOpen);
echo "File Size: " . filesize("text.txt") . " bytes";

?>