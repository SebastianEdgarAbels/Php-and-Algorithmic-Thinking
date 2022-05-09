<?php

// Data input - prompt the use to enter two numbers
echo "Enter an integer for nr.1: ";
$iNr1 = trim (fgets (STDIN));
echo "Enter an integer for nr.2: ";
$iNr2 = trim (fgets (STDIN));

// Data Processing
// Double Decision Control Structure
// if($iNr1 < $iNr2) {
//     echo $iNr1 . " is the smaller number.\n";
// }
// else {
//     echo $iNr2 . " is the smaller number.\n";
// }

// or Single Decision Control Structure
$iMin = $iNr1;

if ($iNr2 < $iNr1) {
    $iMin = $iNr2;
}

echo $iMin . " is the smaller number.\n";

?>