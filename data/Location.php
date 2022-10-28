<?php

namespace Data;

// class abstract tidak bisa di buat object , hanya sebuah kontrak pada class turunannya
abstract class Location{
    public string $name;
}

class City extends Location{

}

class Province extends Location{
}

class Country extends Location{
}

