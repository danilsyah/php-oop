<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("Category #1");
$category->setMarried(true);

$category->setName("    ");
echo "Name = ". $category->getName(). "\n";
echo "Married = ". ($category->isMarried()? "menikah" : "single"). " \n";;
