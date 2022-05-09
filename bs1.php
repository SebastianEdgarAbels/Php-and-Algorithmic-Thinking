<?php

// Data input - prompt the user to enter 2 values 
echo "Enter a value 1: ";
$iVal1 = trim (fgets (STDIN));
echo "Enter a second value: ";
$iVal2 = trim (fgets (STDIN));

// Data processing
$iQuotient = (int) ($iVal1 / $iVal2);
$iRemainder = $iVal1 % $iVal2;

// Results output - display the results on uses's display
echo "The quotient is " . $iQuotient . " and the remainder is " . $iRemainder, "\n";


?>