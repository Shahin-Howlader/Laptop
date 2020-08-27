<?php

$result = array("United States"=>"WatchingTon DC","Bangladesh"=>"Dhaka","India"=>"Delhi","Pakistan"=>"Karachi","Srilanka"=>"Kathmundhu");

asort($result);
foreach($result as $Country => $City) {
  echo "Country :" . $Country . ", City :" . $City . "<br>";
}

?>