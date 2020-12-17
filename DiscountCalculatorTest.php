<?php

class DiscountCalculatorTest {

    public function ShouldApply_WhenValueIsAboveTheMinimumTest() {

        $discountCalculator = new DiscountCalculator();

        $totalValue = 130;

        $totalWithDiscount = $discountCalculator -> apply($totalValue);

        $expectedValue = 110;

        $this->assertEquals($expectedValue, $totalWithDiscount);

    }

    public function ShouldNotApply_WhenValueIsBellowTheMinimumTest() {

        $discountCalculator = new DiscountCalculator();

        $totalValue = 80;

        $totalWithDiscount = $discountCalculator -> apply($totalValue);

        $expectedValue = 80;

        $this->assertEquals($expectedValue, $totalWithDiscount);

    }

    public function assertEquals(float $expectedValue, float $actualValue) {

        if ($expectedValue !== $actualValue) {
            $message = 'Expected: ' . $expectedValue . ' but got: ' . $actualValue;
            throw new \Exception($message);
        }

        echo "Test passed!";
    }
}

?>