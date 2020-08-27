<?php 

class student{
	public $id;
	public $name;
	public $batch;

	function __construct($name){
		$this-> id = $id;
		$this-> name = $name;
		$this-> batch = $batch;
		}

	public function result($id){
		  $cities = fopen('product.txt', 'r');

    while (!feof($cities)) {
      $countryDetails = fgets($cities);
      echo $countryDetails."<br>";
    }
    fclose($cities);
	}
	
}
$student1 = new student("product.txt");
$student1 -> result();
