<?php

// Data input - prompt the user to enter four numbers
echo "Enter first number: ";
$iNr1 = trim (fgets (STDIN));
echo "Enter second number: ";
$iNr2 = trim (fgets (STDIN));
echo "Enter third number: ";
$iNr3 = trim (fgets (STDIN));
echo "Enter fourth number: ";
$iNr4 = trim (fgets (STDIN));

// Data processing
if ($iNr1 < 0 || $iNr2 < 0 || $iNr3 < 0 || $iNr4 < 0) {
    echo "Among the given numbers, there is a negative one!\n";
}

?>