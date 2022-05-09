<?php

// Data input - prompt the user to enter the initial price and the discount
echo "Enter the initial price: ";
$iInitialPrice = trim (fgets (STDIN));
echo "Enter the discount (0-100): ";
$iDiscount = trim (fgets (STDIN));

// Data processing
$iAmountSaved = $iInitialPrice * $iDiscount/100;
$iFinalPrice = $iInitialPrice - $iAmountSaved;

// Results output - display the results on user's display
echo "The amount saved is " . $iAmountSaved . " and the final price is " . $iFinalPrice, "\n";


?>