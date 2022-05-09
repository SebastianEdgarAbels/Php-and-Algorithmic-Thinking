<?php
define("TAX", 0.10);

// Data input - prompt the user to enter the amount of water consumed
echo "Enter the amount of water consumend: ";
$iWater = trim (fgets (STDIN));

// Data processing and Results output
// Data Validation Process
if($iWater < 0) {
    echo "Error! You entered an negative value!\n";
}
else {
    if($iWater <= 10) {
        $iTotalAmountToPay = $iWater * 3;
    }
    elseif($iWater <= 20) {
        $iTotalAmountToPay = 10 * 3 + ($iWater - 10) * 5;
    }
    elseif($iWater <= 35) {
        $iTotalAmountToPay = 10 * 3 + 10 * 5 + ($iWater - 20) * 7;
    }
    else {
        $iTotalAmountToPay = 10 * 3 + 10 * 5 + 15 * 7 + ($iWater - 35) * 7;
    }
    $iTotalAmountToPay = $iTotalAmountToPay * TAX + $iTotalAmountToPay;
    echo "Total amount to pay with taxes included: " . $iTotalAmountToPay, "\n";
}