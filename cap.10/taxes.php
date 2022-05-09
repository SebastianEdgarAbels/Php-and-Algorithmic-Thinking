<?php
define("VAT", 0.19);

//Data input - Prompt the user to enter the price of a product for
echo "Enter the price of the product: ";
$product = trim (fgets (STDIN));

// Data processing - calculate the price with vat
$price = ($product * VAT) + $product;

// Results output - display the result on user's screen
echo "The product's price with taxes is: " . sprintf("%.2f", $price), "\n";


?>