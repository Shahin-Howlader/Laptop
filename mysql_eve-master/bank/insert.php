<?php

  if(isset($_POST['submit'])){
      extract($_POST);

      $conn = mysqli_connect("localhost", "root", "", "bank") or die("Connection Failed : " . mysqli_connect_error());

      $sql = "INSERT INTO account VALUES('', '$name', '$account_type', '$opening_balance')";

      if(mysqli_query($conn, $sql)){
      echo "Record succcessfully Inserted....!!!";
    }else{
      echo "Record Not Inserted ....!!!";
    }
  }
 ?>

<h2>Account Information</h2>
<form  action="#" method="post">
  Name: <br><input type="text" name="name"><br><br>
  Account Type: <br>
    <select name="account_type">
      <option>Savings</option>
      <option>Current</option>
    </select><br><br>
  
  Oppening Balance: <br><input type="text" name="opening_balance"><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
