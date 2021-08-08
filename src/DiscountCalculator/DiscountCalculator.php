<?php

namespace App\DiscountCalculator;

class DiscountCalculator
{
    private const MINIMUM_VALUE = 100;

    private const DISCOUNT_VALUE = 20;

    public function apply($value)
    {
        if ($value > self::MINIMUM_VALUE) {
            return $value - self::DISCOUNT_VALUE;
        }

        return $value;
    }
}
