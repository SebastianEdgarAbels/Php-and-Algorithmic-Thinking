<?php
define("COEF", 3.785);
// Data input - prompt the user to enter a choise
echo "1. Convert gallons to liters.\n";
echo "2. Convert liters to gallons.\n";
echo "Please enter a choise (1 or 2): ";
$iChoise = trim (fgets (STDIN));


// Data processing and Results output
// Data Validation Process -> first if the chose is the right one
if($iChoise != 1 && $iChoise != 2) {
    echo "Invalid choise.\n";
}
else{
    echo "Enter the quantity: ";
    $iQuantity = trim (fgets (STDIN));
    // Data Validation Process -> second if the quantity is valid
    if($iQuantity < 0) {
        echo "Invalid quantity.\n";
    }
    else{    
        if($iChoise == 1) {
        $iRes = $iQuantity * COEF;
        echo $iQuantity, " gallons = ", sprintf("%.2f",$iRes), " liters\n";
        }
        else {
        $iRes = $iQuantity / COEF;
        echo $iQuantity, " liters = ", sprintf("%.2f",$iRes), " gallons\n";
        }
    }    
}
?>