<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

$conflict1 = new Data\One\Conflict("Danil","Sumedang");
$conflict2 = new Data\Two\Conflict("Haykal",4);

var_dump($conflict1). PHP_EOL;
var_dump($conflict2). PHP_EOL;

echo $conflict1->info();
echo $conflict2->info();

echo Bantuan\APPLICATION. PHP_EOL;
Bantuan\helpMe();