<?php
 $foods = array("pasta", "steak", "fish", "potatoes", "Porag", "kupu");
 $food = preg_grep("/^p/i", $foods);
 echo "<pre>";
 print_r($food);
?>