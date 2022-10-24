<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "danil";
$manager->sayHello("Fika");


$vp = new VicePresident();
$vp->name = "haykal";
$vp->sayHello("Fika");