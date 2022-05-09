<?php
define("VAT", 0.2);

// Data input - prompt the user to enter the after tax price
echo "Enter the after tax price of the product: ";
$iAfterTax = trim (fgets (STDIN));

// Data processing
$iBeforeTax = $iAfterTax - ($iAfterTax * VAT);

// Results output - display the results on user's display
echo "The price before tax is " . $iBeforeTax, "\n";

?>