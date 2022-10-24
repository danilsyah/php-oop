<?php

 require_once "data/Person.php";

 $person  = new Person("danil","wado");
 $person1 = new Person("haykal", "sumedang");

 $person->sayHello("ucup");
 echo $person->tambah(2,3). PHP_EOL;

 $person->info();
 $person1->info();
