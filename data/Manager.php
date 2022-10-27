<?php

class Manager 
{
    protected string $name;
    protected string $title;

    public function __construct(string $name= "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }   


    function sayHello(string $name):void
    {
        echo "Hi $name , my name is $this->name , dari class manager". PHP_EOL;
    }
}

class VicePresident extends Manager {

    // constructor overriding
    public function __construct(string $name = ""){
        // tidak wajib tapi di rekomendasikan
        parent::__construct($name, "Vice President");
    }

    // function overriding : mendeklarasikan ulang function yang ada di parent class, di usahakan parameter nya sama dengan parent class
    function sayHello(string $name):void{
        echo "Hey $name, nama saya $this->name , dari class vicepredient". PHP_EOL;
    }
    
}