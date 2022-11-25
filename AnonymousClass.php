<?php

interface HelloWorld{
    function sayHello():void;
}

$helloworld = new class("danil") implements HelloWorld{

    public string $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    function sayHello():void{
        echo "Hello $this->name". PHP_EOL;
    }
};

$helloworld->sayHello();