<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Danil";
$student1->value = 90;
$student1->setSample("TEST");

var_dump($student1);

$student2 = clone $student1;
var_dump($student2);

// echo $student2->getSample();