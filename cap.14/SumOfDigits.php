<?php

// Data input - prompt the user to enter a three digit integer
echo "Enter a three digit integer: ";
$iDigit = trim (fgets (STDIN));

// Data processing

// Convert the integer to string
$sDigit = (string) $iDigit;

$iRes = (int) $sDigit[0] + (int) $sDigit[1] + (int) $sDigit[2];

// Results output - display the results on user's display
echo $iRes, "\n";

?>