<?php

class Person{

    // variabel constant
    const AUTHOR = "Danil Syah";

    // properties
    var string $name;
    var ?string $address = null; //nullable tambahkan tanda tanya di awal tipedata
    var string $country = "Indonesia";


    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;  
    }

    function sayHello(string $name){
        echo "Hello $name" . PHP_EOL;
    }

    function tambah(int $a, int $b){
        return $a + $b;
    }

    // self keyword
    function info(){
        echo "Author : " .self::AUTHOR . PHP_EOL;
    }

    function __destruct(){
        echo "Object person $this->name destroyed". PHP_EOL;
    }

}

class People{

    const AUTHOR = "Belajar PHP OOP";

    var string $name;


    function sayHai(?string $name){
        if (is_null($name)){
            echo "Hi, my name is $this->name". PHP_EOL;
        }else{
            echo "Hello $name, my name is $this->name". PHP_EOL;
        }
    }
}