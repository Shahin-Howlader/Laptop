<?php
 $connection = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($connection, 'myschool' ) or die(mysqli_error($connection));
?>