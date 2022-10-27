<?php

require_once "data/Manager.php";

$manager = new Manager("Icih", "General Manager");
// $manager->name = "Haykal";
$manager->sayHello("Budi");

$vp  = new VicePresident("haykal");
// $vp->name = "Danil";
$vp->sayHello("Fika");