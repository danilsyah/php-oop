<?php

namespace Data;

abstract class Animal{
    protected string $name;
    abstract public function run(): void;
    abstract public function setName(string $name): string;
    abstract public function getName(): string;
    
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

}