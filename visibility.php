<?php

require_once "data/Product.php";


$produk = new Product("pisang",12000);

echo $produk->getName(). PHP_EOL;
echo $produk->getPrice(). PHP_EOL;

$produkInfo = new ProdukDummy("apple", 5000);
$produkInfo->info();