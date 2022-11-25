<?php

// stdClass adalah class kosong bawaan PHP
// stdClass biasanya digunakan ketika kita melakukan konversi dari tipe array menjadi tipe object
// stdClass sangat berguna ketika misal kita ingin melakukan konversi dari tipe data array menjadi tipe object secara otomatis

$array = [
    "firstName" => "danil",
    "middleName" => "syah",
    "lastName" => "arihardjo"
];

// konversi dari array menjadi tipe object class
$object = (object) $array;

var_dump($object);

echo "First Name $object->firstName". PHP_EOL;
echo "Middle Name $object->middleName". PHP_EOL;
echo "Last Name $object->lastName". PHP_EOL;

// konversi dari object menjadi array
$arrayLagi = (array)$object;
var_dump($arrayLagi);
echo $arrayLagi['firstName']. PHP_EOL;

require_once "data/Person.php";
$person = new Person("danil","bandung");
var_dump($person);

// konversi dari object class menjadi array
$arrayPerson = (array)$person;
var_dump($arrayPerson);

