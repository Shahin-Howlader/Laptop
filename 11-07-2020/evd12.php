<?php

class Clock{
	public $clock_id = '';
	public $clock_type = '';
	public $clock_brand = '';
  public $myfile = '';
	

function __construct() {


    $myfile = fopen("products.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file

    $this->myfile;
   
    
  }
function Display() {
   while(!feof($myfile)) {
      echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    
    return;
  }


}

$watchResult = new Clock();
$watchResult->Display();



?>