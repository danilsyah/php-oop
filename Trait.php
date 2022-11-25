<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person};

$person = new Person();
$person->goodBye("Danil");
$person->hello("haykal");

$person->name = "Ucup";
echo $person->name."\n";

$person->address = "Bandung";
echo $person->address."\n";

$person->run();

