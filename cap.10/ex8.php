<?php

define("TIP",0.1);
define("TAX",0.07);

// Data input - prompt the user to enter the charge for a meal
echo "Enter the charge for the meal: ";
$iCharge = trim (fgets (STDIN));


// Data processing
$iTipAmount = $iCharge * TIP;
$iTotal = $iCharge + ($iCharge * TAX) + $iTipAmount;


// Results output - display the tip and the iTotal to user's display
echo "The tip you should give is " . sprintf("%.2f", $iTipAmount) . " and the Total with tip, sales tax and the meal is " . sprintf("%.2f", $iTotal) . "\n";

?>