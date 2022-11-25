<?php
// iterator adalah mengiterasi data property secara manual menggunakan foreach untuk mengakses nya
class Data implements IteratorAggregate{
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $forth = "Forth";

    // mengoverride function getIterator dari interface IteratorAggregate
    // public function getIterator(){
    //     $array = [
    //         "first" => $this->first,
    //         // "second" => $this->second,
    //         "third" => $this->third,
    //         "forth" => $this->forth,
    //     ];

    //     return new ArrayIterator($array);
    // }

    public function getIterator(){
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "Third" => $this->third;
        yield "forth" => $this->forth;
    }
}

$data = new Data();
// iterator adalah mengiterasi data prop secara manual menggunakan fore untuk mengakses nya
foreach($data as $property => $value){
    echo "$property : $value". PHP_EOL;
}
