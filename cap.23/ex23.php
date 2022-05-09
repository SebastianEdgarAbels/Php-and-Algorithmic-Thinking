<?php

// Data input - prompt the user to enter his income and the number of his children
echo "Enter your income: ";
$iIncome = trim (fgets (STDIN));
echo "Enter the number of your children: ";
$iChildren = trim (fgets (STDIN));

// Data processign and Results output
if($iIncome <= 8000) {
    $iTotal = $iIncome * 0.10;
}
elseif($iIncome <= 30000) {
    $iTotal = 8000 * 0.10 + ($iIncome - 8000) * 0.15;
}
elseif($iIncome <= 70000) {
    $iTotal = 8000 * 0.10 + 22000 * 0.15 + ($iIncome - 30000) * 0.25;
}
else {
    $iTotal = 8000 * 0.10 + 22000 * 0.15 + 40000 * 0.25 + ($iIncome - 70000) * 0.30;
}

if($iChildren > 0) {
    $iTotal = $iTotal - $iTotal * 0.02;
}
echo "Total amount to pay: " . $iTotal, "\n";

?>