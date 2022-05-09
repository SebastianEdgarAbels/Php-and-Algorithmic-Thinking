<?php
define("VAT", 0.2);
define("STR", 0.06);

// Data input - prompt the user to enter the kWh from the beginning and end of the month
echo "Enter the kWh from the beginning of the month: ";
$iBegin = trim (fgets (STDIN));
echo "Enter the kWh from the end of the month: ";
$iEnd = trim (fgets (STDIN));

// Data processing 
$iTotalUsed = $iEnd - $iBegin;
$iCost = ($iTotalUsed * STR) * VAT + ($iTotalUsed * STR);

// Results output - display the total kWh used in a month and the cost
echo "The amount of kWh used last month is: " . $iTotalUsed . " and the cost is " . sprintf("%.2f", $iCost). " euro \n";

?>