<?php
     $deleteId=$_GET['deleteid'];
     if($deleteId){
          $db=("localhost", "root", "", "products");
          $myShowQuery="delete from manufacturer where id='$deleteId';";
          $db->query($myShowQuery);
          $db->close();
          echo "manufacturer with id: $deleteId deleted";
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>

     <?php 
     
     $conn = mysqli_connect("localhost", "root", "", "products") or die("Connection Failed : " . mysqli_connect_error());
     $query = "SELECT id, name FROM manufacturer";
     $result = mysqli_query($conn, $query);

?>
    <form action="" method="get">
         <label for="">Manufacturer:</label>
         <select name="deleteid">
              <?php while ($row = mysqli_fetch_array($result)){  ?>
              <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
         <?php } ?>
         </select>
         <input type="submit" name="delete"  id="btnDelete" value="delete" />
    </form> 
</body>
</html>
 
