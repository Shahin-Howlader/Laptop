<html>
 <head>
<style type="text/css">
body{font-family: "Trebuchet MS", Verdana, Arial;width:600px;}
 div { background-color: #F5F5DC; }
</style>
 </head>
<body>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'exampleDB');
if (mysqli_connect_errno())
{
die('Unable to connect!');
}
else
{
$query = 'SELECT * FROM language';
if ($result = $mysqli->query($query))
{
if ($result->num_rows > 0)
{
?>
<p>
Select a language
<select id="selectLanguage">
<option value="">select</option>
<?php 
139 | P a g e
while($row = $result->fetch_assoc())
{
?>
<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
<?php
}
?>
</select>
</p>
<p id="result"></p>
<?php
}
else
{
echo 'No records found!';
}
 $result->close();
}
else
 {
echo 'Error in query: $query. '.$mysqli->error;
}
}
$mysqli->close();
?>
</body>
</html>