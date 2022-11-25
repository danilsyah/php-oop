<?php

/* 
trait mirip seperti clas abstract, bisa membuat konkrit function atau abstract function
yang membedakan adalah, trait bisa kita tambahkan ke dalam class lebih dari satu.
trait mirip seperti ekstention, dimana kita bisa menambahkan konkrit function function ke dalam class dengan trait
secara sederhana, trait adalah digunakan untuk menyimpan function-function yang bisa digunakan ulang di beberapa class.

trait overriding : parentClass = override by = trait = override by = child class
*/

namespace Data\Traits;

// trait class
trait SayGoodBye{
    public function goodBye(?string $name): void {
        if(is_null($name)){
            echo "Good Bye ". PHP_EOL;
        }else{
            echo "Good Bye $name". PHP_EOL;
        }
    }
}

trait SayHello{
    public string $address;
    public function hello(?string  $name): void {
        if(is_null($name)){
            echo "Hello ". PHP_EOL;
        }else{ 
            echo "Hello $name". PHP_EOL;
        }
    }
}

trait CanRun{
    public abstract function run(): void;
}

trait HasName{
    // trait properties
    public string $name;
}

class ParentPerson{
    public function goodBye(?string $name): void{
        echo "Good bye in person". PHP_EOL;
    }

    public function hello(?string $name):void{
        echo "Hello in person ". PHP_EOL;
    }
}

// trait inheritance
trait All{
    use SayGoodBye,SayHello, HasName, CanRun {
        // trait visibily override
        // hello as private;
        // goodBye as private;
    }
}

// cara menggunakan trait
class Person extends ParentPerson{

    use All;

    // overriding abstract function trait
    public function run(): void {
        echo "Person {$this->name} is running". PHP_EOL;
    }

    
}

