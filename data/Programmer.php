<?php

// Polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain.
// Polymorphism erat hubungannya dengan Inheritance

class Programmer {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function info(){
        echo "Programmer {$this->name}\n";

    }

}

class BackendProgrammer extends Programmer {

    public function info(){
        echo "$this->name adalah seorang programmer backend". PHP_EOL;

    }

}

class FrontendProgrammer extends Programmer {
    public function info(){
        echo "$this->name adalah seorang programmer frontend". PHP_EOL;
    }
}

class Company{
    public Programmer $programmer;
}

// polimorphism pada argument parameter function
function sayHelloProgrammer(Programmer $programmer){
    // type check object and casts
    if ($programmer instanceof BackendProgrammer){
        echo( "hello backend Programmer $programmer->name"). PHP_EOL;
    }else if($programmer instanceof FrontendProgrammer){
        echo( "hello frontend Programmer $programmer->name"). PHP_EOL;
    }else if($programmer instanceof Programmer){
        echo( "hello Programmer $programmer->name"). PHP_EOL;
    }
}