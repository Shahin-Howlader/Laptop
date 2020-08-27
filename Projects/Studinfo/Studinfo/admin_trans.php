 <?php include'header.php' ;?>
<?php include'connection.php' ;?>

 <div class="col-lg-12">
                <?php
						$fname= $_POST['fname'];
					    $lname= $_POST['lname'];
						$em= $_POST['user'];
						
						
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO admin(fname, lname, user)
								VALUES (NULL,'".$fname."','".$lname."','".$em."')";
								mysqli_query($db,$query)or die (mysqli_error($db));
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "student.php";
		</script>
                    </div>