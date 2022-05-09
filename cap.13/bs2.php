<?php

// Data input - prompt the user to enter a four digit number
echo "Enter a four-digit number: ";
$iNr = trim (fgets (STDIN));

// Data processing - split the integer into its four digits and assign each digit to a separate variable
$iDigit1 = (int) ($iNr / 1000);
$iRemeinder = $iNr % 1000;

$iDigit2 = (int) ($iRemeinder / 100);
$iRemeinder = $iRemeinder % 100;

$iDigit3 = (int) ($iRemeinder / 10);
$iDigit4 = $iRemeinder % 10;

$iTotal = $iDigit1 + $iDigit2 + $iDigit3 + $iDigit4;

// Results output - display the total on user's display 
echo "The total sum of the four digits is " . $iTotal, "\n";


?>
