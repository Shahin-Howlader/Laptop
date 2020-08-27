<!DOCTYPE html>
<html>
<body>

<?php
class Info {
  public $city= ['Dhaka','Delhi','Karachi','London','Khatmundhu'];
  public $country = ['Bangladesh','India','Pakistan','Uk','Nepal'];

  // Methods
  function set_city($city) {
    $this->city = $city;
  }
  function get_city() {
    return $this->city;
  }
   function set_country($country) {
    $this->country = $country;
  }
  function get_country() {
    return $this->country;
  }
}

$Info= new Info();
$Info->get_country();
$Info->get_city();
?>
 
</body>
</html>