<?php
    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if(isset($_POST['submit'])){
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false){
        echo 'File is an image -'  .$check['mime'] . '.';
        $uploadOk = 1;

      } else{
        echo "File is not an image <br>";
        $uploadOk = 0;

      }
    }

    if(file_exists($target_file)){
      echo "File Already exist here";
      $uploadOk = 0;

    }

    if($_FILES['fileToUpload']['size']> 500000000){
      echo "File size is large";
      $uploadOk = 0;

    }

    if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif'){
      echo "File format not Jpg, png, jpeg or gif";
      $uploadOk = 0;

    }

    if($uploadOk == 0){
      echo "Sorry Problem in uploading";
    } else{
      if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
        echo "The File " . basename($_FILES["fileToUpload"]["name"]) . " Uploaded Successfully";

      }else{
        echo "Problem in Uploading";
      }
    }

   
?>