<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- <script src="jquery.min.js"></script> -->
	<script>
		
		$(document).ready(function() {
			$('#round').change(function(){
				if($(this).val() == '') return;
				$.get(
					'process.php',
					{ round : $(this).val() },
					function(data){
					$('#student').html(data);
				}
				);
	});
});

	</script>
</head>
<body>
	<div class="col-6">
		<form action="">
			<label for="round">Round</label>
			<select name="round" id="round">
				<option value="">Select Round</option>
				<?php 
					include_once('db.php');
					$query = mysqli_query($db,'SELECT * FROM `batches`');
					while ($result = mysqli_fetch_array($query)) {
						echo "<option value='". $result['round'] ."'>". $result['round'] ."</option>" ;
					}
				 ?>
			</select>

			<label for="student">Round</label>
			<select name="student" id="student"></select>
			
		</form>
	</div>
</body>
</html>
