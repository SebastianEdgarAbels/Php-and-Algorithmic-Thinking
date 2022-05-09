<?php

// Data input - prompt the user to enter non negative number
echo "Enter a non negative number: ";
$iNr = trim (fgets (STDIN));

// Data processing + Results output
if ($iNr % 4 == 0) {
    echo "The given number is a multiple of 4.\n";
}
else {
    $quotient = $iNr / 4;
    $remainder = $iNr % 4;
    echo $iNr . " is not a multiple of 4.\n" . $iNr . " = " . (int)($quotient) . " * 4" . " + " . $remainder, "\n"; 
}

?>