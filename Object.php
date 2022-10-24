<?php

require_once "data/Person.php";

// instansiasi object
$person = new Person("danil", null);
$person1 = new Person("haykal", "wado");

var_dump($person);

echo "nama saya $person->name , alamat $person->address, warga $person->country". PHP_EOL;

var_dump($person1); 