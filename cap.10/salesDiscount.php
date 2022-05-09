<?php

// Data input - prompt the user to enter the price and the discount offered
echo "Enter the price: ";
$price = trim (fgets (STDIN));
echo "Enter the discount offered (0-100): ";
$discount = trim (fgets (STDIN));

// Data processing - calculate the price with discount
$priceWithDiscount = $price - ($price * $discount/100);

// Results output - display the result on user's screen
echo "The price with discount is: " . sprintf("%.2f", $priceWithDiscount), "\n";

?>