<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Danil";
$student1->value = 100;

$student2 = clone $student1;
$student2->id = "1";
$student2->name = "Danil";

var_dump($student1 == $student2);
var_dump($student1 === $student2);