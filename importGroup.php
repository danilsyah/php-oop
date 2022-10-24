<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conf, Dummy as dump, Sample as sample};
use function Bantuan\{helpMe as help};

$conflict = new Conf("Danil", "Sumedang");
$dummy = new dump();
$sample = new sample();

echo $conflict->info();
help();