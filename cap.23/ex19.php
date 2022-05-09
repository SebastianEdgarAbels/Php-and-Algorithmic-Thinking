<?php

// Data input - prompt the user to enter the amount of books purchased
echo "Enter the amount of books purchased: ";
$iBooks = trim (fgets (STDIN));

// Data processing and Results output
// Data Validation Process
if($iBooks < 0) {
    echo "You entered an invalid ammount\n";
}
else {
    if($iBooks < 3) {
        $discount = 0;
    }
    elseif($iBooks <= 5) {
        $discount = 10;
    }
    elseif($iBooks <= 9) {
        $discount = 15;
    }
    elseif($iBooks <= 13) {
        $discount = 20;
    }
    elseif($iBooks <= 19) {
        $discount = 27;
    }
    else {
        $discount = 30;
    }
    $iRes = $iBooks * 10 * $discount/100;
    $totalAmount = $iBooks * 10 - $iRes;
    echo "You have a discount of " . $discount . "% meaning ". $iRes, "$ and total amount: " . $totalAmount . "$\n";    
}
?>