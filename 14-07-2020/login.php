<?php
 function authenticate_user() 
 {header('WWW-Authenticate: Basic realm="Secret Stash"');
 header("HTTP/1.0 401 Unauthorized");
 exit;
 }

 if (! isset($_SERVER['PHP_AUTH_USER'])) {
 authenticate_user();
 } else {
 	
 $db = new mysqli("localhost", "root", "", "wdpf44");
 $stmt = $db->prepare("SELECT username, pswd FROM logins WHERE username=? AND pswd= ?");
 $user = $_SERVER['PHP_AUTH_USER'];
 $pass = hash("sha1", $_SERVER["PHP_AUTH_USER"]);
 $stmt->bind_param('ss', $user, $pass);
 $stmt->execute();
 $stmt->store_result();
 // Remember to check for erres also!
 if ($stmt->num_rows == 0)authenticate_user();
 else {
 	header('Location: success.php');
 	}
 }
?>