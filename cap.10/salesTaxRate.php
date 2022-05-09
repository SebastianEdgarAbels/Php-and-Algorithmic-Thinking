<?php

define("VAT", 0.19);

// Data input - prompt the user to enter the price and the discount amount
echo "Enter the product's price: ";
$price = trim (fgets (STDIN));
echo "Enter the discount amount (0-100): ";
$discount = trim (fgets (STDIN));

// Data processing 
// $discountAmount = $price * $discount/100;
// $priceWithDiscount = $priceWithDiscount - $discountAmount;
$priceWithDiscount = $price - ($price * $discount/100);
$salesValue = $priceWithDiscount + ($priceWithDiscount * VAT);

// Results output - display the sales value on user's screen
echo "The sale's value is ", sprintf("%.2f", $salesValue), "\n";
?>