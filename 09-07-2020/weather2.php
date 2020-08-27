<?php
$OpenWeather = ['api_key' => '984a608f187321c3175ff97b72740fa3'];
$zip = "98109";
$base_url = "https://api.openweathermap.org/data/2.5";
$weather_url = "/forecast?zip=" . $zip;
$api_key = "&appid={$OpenWeather['api_key']}";
$api_url = $base_url . $weather_url . $api_key;
$weather = json_decode(file_get_contents($api_url));
echo "<pre>";


print_r($weather);


?>