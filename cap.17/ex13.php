<?php

// Data input - prompt the user to enter the pay rate and the total hours worked
echo "Enter the pay rate: ";
$iPayRate = trim (fgets (STDIN));
echo "Enter the total hours worked: ";
$iTotalH = trim (fgets (STDIN));

// Data processing
$iGrossPay = null;
if($iTotalH > 40) {
    $iGrossPay = $iPayRate * ($iTotalH - 40) * 2 + $iPayRate * 40; 
}
else {
    $iGrossPay = $iPayRate * $iTotalH;
}
echo $iGrossPay = $iGrossPay * 0.7 . " is the net pay after all deductions.\n";

?>