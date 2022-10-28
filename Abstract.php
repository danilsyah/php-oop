<?php

require_once "data/Location.php";

use Data\{Location, City, Province, Country};

$city = new City();
$province = new Province();
$country = new Country();
// $location = new Location(); ERROR tidak bisa di panggil karena class abstract


$city->name = "Sumedang";
$province->name = "Jawa Barat";
$country->name = "Indonesia";

echo $city->name. "\n";

echo $province->name. "\n";

echo $country->name. "\n";
