<?php

require_once "data/Animal.php";

use Data\{Cat, Dog};

$cat = new Cat();
$cat->setName("Boni");
$cat->run();

$dog = new Dog();
$dog->setName("Larry");
$dog->run();
