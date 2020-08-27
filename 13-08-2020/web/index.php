<?php 
$sql = "select * from country order by country_name ASC";
$rs = mysqli_query($conn,$sql);
?>


<div class="container">
	<form action="" method="post">
		<div class="country-container">
			<label>Country: </label>
			<select id="country" name="country_name">
				<option value="">Select Country</option>
				<?php 
					while($rows = mysqli_fetch_assoc($rs))
					{
						echo '<option value="'.$rows['id'].'">'.$rows['country_name'].'</option>';
					}
				?>
			</select>
			<img src="img/ajax-loader.gif" id="loader">
		</div>
		<div class="cities-container">
		</div>
		
		<div class="submit-container">
			<input type="submit" name="submit" value="submit">
		</div>
	</form>
</div>