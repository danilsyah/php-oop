<?php

require_once "data/Programmer.php";

// polimorphism pada properties class
$company = new Company();
$company->programmer = new Programmer("danil");
var_dump($company);
$company->programmer->info();

$company->programmer = new BackendProgrammer("Haykal");
var_dump($company);
$company->programmer->info();


$company->programmer = new FrontendProgrammer("Fika");
var_dump($company);
$company->programmer->info();

// polimorphism pada argument function
sayHelloProgrammer(new Programmer("danil"));
sayHelloProgrammer(new BackendProgrammer("Haykal"));
sayHelloProgrammer(new FrontendProgrammer("Fika"));


