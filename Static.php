<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;
MathHelper::hello();

$total = MathHelper::sum(10,10,10,10,10);
echo "Total $total". PHP_EOL;