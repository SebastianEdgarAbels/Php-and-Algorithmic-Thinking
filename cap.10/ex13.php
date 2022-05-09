<?php

define("VAT", 0.2);

// Data input - prompt the user to enter the values for each product
echo "Enter the first product's price: ";
$iProd1 = trim (fgets (STDIN));
echo "Enter the second product's price: ";
$iProd2 = trim (fgets (STDIN));
echo "Enter the thirs product's price: ";
$iProd3 = trim (fgets (STDIN));

// Data processing
$iProd1final = $iProd1 + ($iProd1 * VAT);
$iProd2final = $iProd2 + ($iProd2 * VAT);
$iProd3final = $iProd3 + ($iProd3 * VAT);
$iAverage = ($iProd1final + $iProd2final + $iProd3final) / 3;

// Results output - display the results on user's display
echo "The final price for first product is " . $iProd1final
. "\n the final price for second product is " . $iProd2final
. "\n the final price for third product is " . $iProd3final
. "\n and the average value for all three products is " . $iAverage, "\n";

?>