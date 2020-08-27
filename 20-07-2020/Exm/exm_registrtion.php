<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form with PHP</title>
</head>
 
<body>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        extract($_POST);
        if (!preg_match('/^.{4,8}$/', $name)) {
            echo "Only 4-8 Chrcter allowed";
        }else{
            echo $name . ' valid';
        }
        //Email validation
        if(filter_var($email, FILTER_VALIDATE_EMAIL)==true){
            echo "<h3 class='valid'>$email valided</h3>";
        } else {
             
            echo "<h3 class='invalid'>You need to @ sign in this emil</h3>";    
        }     

    }
?>   
<form method="post" action="">
<p><input type="text" name="name" placeholder="Put your name"></p>
<p><input type="text" name="email" placeholder="Put email address"></p>
<input type="submit" name="submit" value="REGISTER">
</form>
</body>
</html>