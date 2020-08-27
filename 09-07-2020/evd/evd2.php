<?php

class Book{
	public $isbn = '123456788';
	public $book_name = 'Php';
	public $author_name = 'Shahin Howlader';
	public $price = '5000';

function __construct($isbn, $book_name, $author_name, $price ) {
    $this->isbn = $isbn;
    $this->book_name = $book_name;
    $this->author_name = $author_name;
    $this->price = $price;
  }
function Selling_price($discount = '500') {
    $db= $this->price-$discount;
    return 'Selling Price : <b>' .$db;
  }


}
$book = new Book('123456','PHP','Tuhin Ahmed','15000');
echo 'Book Original Price is: <b>' . $book->price;
echo "<br>";
echo $book->Selling_price();

echo "<hr>";

$book1 = new Book('123456','PHP','Tuhin Ahmed','20000');
echo 'Book Original Price is: <b>' . $book1->price;
echo "<br>";
echo $book1->Selling_price();


?>