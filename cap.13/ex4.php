<?php

// Data input - prompt the use to enter an integer value
echo "Enter an integer value: ";
$iNr = trim (fgets (STDIN));

// Data processing
$iAnswer = 1- $iNr % 2;

// Results output - display the result on user's display
echo "If the result is 1 it means that your number was even, if the result 
is 0 it means that your number was an odd number. The result is: " . $iAnswer, "\n";

?>

