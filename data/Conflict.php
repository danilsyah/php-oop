<?php

namespace Data\One{
    class Conflict
    {
        var string $name;
        var string $address;

        function __construct(string $name, string $address){
            $this->name = $name;
            $this->address = $address;
        }

        function info(){
            return "my name is $this->name and my address $this->address". PHP_EOL;
        }
    }
}


namespace Data\Two{
    class Conflict
    {
        var string $name;
        var int $age;

        function __construct(string $name, int $age){
            $this->name = $name;
            $this->age = $age;
        }

        function info(){
            return "my name $this->name, my age is $this->age".PHP_EOL;
        }
    }  
}
