<?php

// Data input - prompt the use to enter two numbers
echo "Enter first number: ";
$iNr1 = trim (fgets (STDIN));
echo "Enter second number: ";
$iNr2 = trim (fgets (STDIN));

// Data processing
if ( $iNr1 > 0 && $iNr2 > 0) {
    echo "Positive\n";
}


?>