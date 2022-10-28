<?php

namespace Data\Mobil;

interface HasBrand{
    function getBrand(): string;
}

interface IsMaintenance {
    function isMaintenance(): bool;
}

interface Car extends HasBrand{
    function drive(): void;
    function getTire():int;
}

class Avanza implements Car, isMaintenance{
    public function drive(): void{
        echo "Drive Avanza". PHP_EOL;
    }

    public function getTire(): int{
        return 3;
    }

    public function getBrand(): string{
        return "Toyota";
    }

    public function isMaintenance(): bool{
        return false;
    }
}