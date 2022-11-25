<?php

namespace Data;

require_once "Animal.php";

// covariance memungkinkan kita override return function yang diparent dengan return value yang lebih spesifik
// contoh nya return value dari function child nya

// Contravariance adalah memperbolehkan sebuah child class untuk membuat
// function agrument yang lebih spesifik dibandingkan parent nya.

interface AnimalShelter
{
    public function adopt(string $name):Animal;
}

class CatShelter implements AnimalShelter{
    public function adopt(string $name):Cat{
        $cat = new Cat();
        $cat->setName($name);
        return $cat;
    }
}

class DogShelter implements AnimalShelter{
    public function adopt(string $name): Dog{
        $dog = new Dog();
        $dog->setName($name);
        return $dog;
    }
}