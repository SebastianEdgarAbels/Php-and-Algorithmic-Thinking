<?php
define("VAT", 0.19);
// Data input - prompt the user to enter the before-tax amount of his order
echo "Enter the before-tax amount of your order: ";
$iBeforeTaxAmount = trim (fgets (STDIN));

// Data processing and Results output
if($iBeforeTaxAmount < 0) {
    echo "Error: You entered a negative value!\n";
}
else {
    if($iBeforeTaxAmount < 50) {
        $iDiscount = 0;
    }
    elseif($iBeforeTaxAmount < 100) {
        $iDiscount = 0.01;
    }
    elseif($iBeforeTaxAmount < 200) {
        $iDiscount = 0.02;
    }
    elseif($iBeforeTaxAmount >= 250) {
        $iDiscount = 0.03;
    }
    
    // here it's showned the discount amount in $
    $iDiscReceived = $iBeforeTaxAmount * $iDiscount;
    // here it's showned the price after discount 
    $iAmountWithoutTaxes = $iBeforeTaxAmount - $iDiscReceived; 
    // here it's showned the amount with discount and after taxes
    $iTotalAmount = $iAmountWithoutTaxes * VAT + $iAmountWithoutTaxes;
    echo "You got a Discount of  " . $iDiscount, "$\n";
    echo "Total amount with discount and taxes: " . sprintf("%.2f",$iTotalAmount), "$\n";
}
?>