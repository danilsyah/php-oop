<?php

class Zero{
    // digunakan untuk membuat properties yang dinamis
    // gunakan 4 magic function dibawah ini
    private array $properties = [];

    // function magic untuk properties dinamis
    public function __get($name){
        echo "Get Property $name". PHP_EOL;
        return $this->properties[$name];
    }

    public function __set($name, $value){
        echo "Set Property $name with $value". PHP_EOL;
        $this->properties[$name] = $value;
    }

    public function __isset($name){
        echo "Isset $name". PHP_EOL;
        return isset($this->properties[$name]);
    }

    public function __unset($name){
        echo "Unset $name". PHP_EOL;
        unset($this->properties[$name]);
    }
    // =====================================

    // function magic untuk function overloading
    public function __call($name, $arguments){
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join ". PHP_EOL;
    }

    public static function __callStatic($name, $arguments){
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join ". PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = "Danil";
$zero->middleName = "Syah";
$zero->lastName = "Arihardjo";

echo "First Name : $zero->firstName". PHP_EOL;
echo "Middle Name : $zero->middleName". PHP_EOL;
echo "Last Name : $zero->lastName". PHP_EOL;

// unset($zero->lastName);
// echo "Last Name : $zero->lastName". PHP_EOL;

$zero->sayHello("danil", "syah");
Zero::sayHello("haykal", "dafiansyah");


