<?php

require_once  "data/Car.php";

use Data\Mobil\{Avanza};

$car = new Avanza();

$car->drive();
echo $car->getTire() . PHP_EOL;
echo $car->getBrand() . PHP_EOL;
echo ($car->isMaintenance()? "service": "normal"). PHP_EOL;