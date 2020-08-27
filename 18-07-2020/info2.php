

<!DOCTYPE html>
<html>
<body>

<?php
class Info {
  public $id;
  public $city;
  public $country;

  // Methods
  function show() {
    $cities = fopen('city.txt', 'r');

    while (!feof($cities)) {
      $countryDetails = fgets($cities);
      echo $countryDetails."<br>";
    }
    fclose($cities);
  
  }
}
$cityinfo = new Info();
echo $cityinfo->show();

?>
 
</body>
</html>