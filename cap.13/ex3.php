<?php

// Data input - prompt the user to enter an integer
echo "Enter an integer value: ";
$iNr = trim (fgets (STDIN));

// Data processing
$iAnswer = $iNr % 2;

// Results output - display the result on user's display
echo "If the result is 1 means that your number is odd, if the result is 0 it means that your number is even. An the result is: " . $iAnswer, "\n";


?>