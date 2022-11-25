<?php

namespace Data;

require_once "Food.php";

abstract class Animal{
    protected string $name;
    abstract public function run(): void;
    abstract public function setName(string $name): string;
    abstract public function getName(): string;
    abstract public function eat(AnimalFood $animalFood): void;
    
}

class Cat extends Animal{
    public function run(): void{
        echo "Cat $this->name is running". PHP_EOL;
    }

    public function setName(string $name): string{
        $this->name = $name;
        return $this->name;
    }

    public function getName(): string{
        return $this->name;
    }

    public function eat(AnimalFood $animalFood): void{
        echo "Cat is eating". PHP_EOL;
    }
}

class Dog extends Animal{
    public function run(): void{
        echo "Dog $this->name is running". PHP_EOL;
    }

    public function setName(string $name): string{
        $this->name = $name;
        return $this->name;
    }

    public function getName(): string{
            return $this->name;
    }

    // Contravariance
    public function eat(Food $animalFood):void{
        echo "Dog is eating". PHP_EOL;
    }

}