<?php

namespace Data;

class Shape{
    public function getCorner(){
        return 0;
    }

    protected function info(string $name=""){
        echo "hai nama saya $name ". PHP_EOL;
    }
}

class Rectangle extends Shape{
    public function getCorner(){
        return 4;
    }

    public function getParentCorner(){
        return parent::getCorner();
    }

    public function setParentInfo(string $name = ""){
        return parent::info($name);
    }
}