<?php

require_once('config.php');
$resultStr = '';
$query = 'SELECT * FROM districts where div_id='.$_GET['id'];
if ($result = $mysqli->query($query))
{
if ($result->num_rows > 0)
{
$resultStr.='<ul>';
while($row = $result->fetch_assoc())
{
$resultStr.= '<li><strong>'.$row['dist_name'].'</strong> - '.$row['dist_info'];
$resultStr.= '<div><pre>'." something ".'</pre></div>';
'</li>';
}$resultStr.= '</ul>';
}else
{
$resultStr = 'Nothing found';
}
}echo $resultStr;
?>