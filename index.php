<?php 

include 'autoloader.php';

$discountCalculator = new DiscountCalculator();
echo $discountCalculator -> apply(120) . "\n";

?>

