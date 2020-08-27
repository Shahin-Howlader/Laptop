<?php
 session_start();

 printf("Your username is %s.", $_SESSION['username']);
 $enc = session_encode();
 echo $enc;
 echo '<hr>';
 print_r($_SESSION);
?>