<?php

require_once "data/Person.php";

$person = new Person("Haykal", "Wado");
$person->name = "Nufika";
$person->address = "Sumedang";

var_dump($person);

echo "Name : $person->name". PHP_EOL;
echo "Address : $person->address". PHP_EOL;
echo "Country : $person->country". PHP_EOL;

$person2 = new Person("Budi", null);
var_dump($person2);

