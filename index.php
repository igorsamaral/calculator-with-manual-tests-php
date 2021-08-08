<?php

require __DIR__ . "/vendor/autoload.php";

use App\DiscountCalculator\DiscountCalculator;

$discountCalculator = new DiscountCalculator();
$total = $discountCalculator->apply(110);

echo $total . "\n";
