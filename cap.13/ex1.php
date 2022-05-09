<?php

// Data input - prompt the user to enter an integer
// last digit of any integer can be isolate using a modulus 10 operation.
echo "Enter an integer value: ";
$iNr = trim ( fgets (STDIN));

// Data processing
$iLastDigit = $iNr % 10;
$iRes = $iLastDigit * 8;

// Results output - display the result on user's display
echo "The last digit from your number is " . $iLastDigit . " multiplied with 8 is: " . $iRes . "\n";


?>