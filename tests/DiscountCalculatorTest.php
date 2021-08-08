<?php

namespace Test;

use App\DiscountCalculator\DiscountCalculator;

class DiscountCalculatorTest
{
    public function shouldApplyWhenValueIsAboveTheMinimumTest()
    {
        $totalValue = 110;
        $expectedValue = 90;

        $discountCalculator = new DiscountCalculator();
        $totalWithDiscount = $discountCalculator->apply($totalValue);

        $this->assertEquals($expectedValue, $totalWithDiscount);
    }

    public function shouldNotApplyWhenValueIsBellowTheMinimumTest()
    {
        $totalValue = 90;
        $expectedValue = 90;

        $discountCalculator = new DiscountCalculator();
        $total = $discountCalculator->apply($totalValue);

        $this->assertEquals($expectedValue, $total);
    }

    private function assertEquals($expectedValue, $actualValue)
    {
        if ($actualValue != $expectedValue) {
            $message = "Expected: ${expectedValue}, but got: ${actualValue}";
            throw new \Exception($message);
        }

        echo "Test passed! \n";
    }
}