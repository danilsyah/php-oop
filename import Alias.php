<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Bantuan\helpMe as help;
use const Bantuan\APPLICATION as APP;

$conflict1 = new Conflict1("danil","sumedang");
$conflict2 = new Conflict2("haykal",4);

echo $conflict1->info();
echo $conflict2->info();

help();
echo APP. PHP_EOL;