<?php

/*
    visibily :
        1. public : propertis bisa di akses dari class sendiri, class turunan dan di luar class
        2. protected : properties hanya bisa di akses di class itu sendiri dan class turunan
        3. private : properties hanya bisa di akses di class nya sendiri
*/

class Product{

    // private string $name;
    // private int $price;

    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function getName():string{
        return $this->name;
    }

    public function getPrice():int{
        return $this->price;
    }
}


class ProdukDummy extends Product{
    public function info(){
        echo "Name : $this->name". PHP_EOL;
        echo "Price : $this->price". PHP_EOL;
    }
}

