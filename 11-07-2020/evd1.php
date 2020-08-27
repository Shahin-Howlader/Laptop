<?php

class Clock{
	public $clock_id = '';
	public $clock_type = '';
	public $clock_brand = '';
	

function __construct($clock_id, $clock_type, $clock_brand) {
    $this->clock_id = $clock_id;
    $this->clock_type = $clock_type;
    $this->clock_brand = $clock_brand;
    
  }
function Display($show) {
    $db= $this->show;
    return;
  }


}
$watchResult = new Clock('123456','PHP','Tuhin Ahmed','15000');
echo $watchResult->Display();


?>