<?php
include 'connection.php';
include 'topnav.php';
?>

          <!-- Breadcrumbs-->
           
          </ol>
           <div class="Student_logo">
            <!-- <a href="#" class="image full"><img src="image/our-students.jpg" style="width:1000px;" style="background-attachment: fixed;" style="background-size: contain;"  > </a> -->
            <h2 style="text-align: center;">Welcome To Our School</h2>

			<div class="w3-content w3-section">
			  <img class="mySlides" src="image/img1.jpg" style="width:100%">
			  <img class="mySlides" src="image/img2.jpg" style="width:100%">
			  <img class="mySlides" src="image/img3.jpg" style="width:100%">
			  <img class="mySlides" src="image/img4.jpg" style="width:100%">
			  <img class="mySlides" src="image/img5.jpg" style="width:100%">
			  <img class="mySlides" src="image/img6.jpg" style="width:100%">
			</div>

			<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("mySlides");
			  for (i = 0; i < x.length; i++) {
			    x[i].style.display = "none";  
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}    
			  x[myIndex-1].style.display = "block";  
			  setTimeout(carousel, 5000); // Change image every 2 seconds
			}
			</script>
          <!-- Page Content -->
          <h4></h4>
          <hr> 
          <p> <h5>  </h5></p>
<?php include 'footer.php'; ?>