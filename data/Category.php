<?php

class Category{
    private string $name;
    private bool $married;

    public function getName():string{
        return $this->name;
    }

    public function setName(string $name):void{
        if(trim($name)!== ""){
            $this->name = $name;
        }
    }

    public function isMarried():bool{
        return $this->married;
    }

    public function setMarried(bool $married ):void{
        $this->married = $married;

    }
}