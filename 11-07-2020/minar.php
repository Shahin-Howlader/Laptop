<?php 

/**
 * clock class
 */
 //text file not avaiable in online.
class Clock{
	public $clock_id;
	public $clock_type;
	public $clock_brand;
	public $file;

	function __construct($file){
		$this-> file = $file;
		}

	public function display(){
		$product = fopen($this-> file, "r");

		while (!feof($product) ) {

			$txtLine = fgets($product);
			$arrs = explode(' ', $txtLine);
			// echo $arrs[0].$arrs[1].$arrs[2]."<BR>";
			echo $this -> clock_id = $arrs[0].' ';
			echo $this -> clock_type = $arrs[1].' ';
			echo $this -> clock_brand = $arrs[2].'<br>';

		}
	}
	
}
$clock1 = new Clock("product.txt");
$clock1 -> display();
