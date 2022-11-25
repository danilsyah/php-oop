<?php


require_once "data/Animal.php";
require_once "data/AnimalShelter.php";
require_once "data/Food.php";

use Data\{CatShelter, DogShelter};
use Data\{Food, AnimalFood};

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Luna");

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("doggy");

$cat->eat(new AnimalFood);
$dog->eat(new Food);

$cat->run();
$dog->run();
