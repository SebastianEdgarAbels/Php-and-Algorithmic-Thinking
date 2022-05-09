<?php

// Data input - prompt the user to enter two numbers
echo "Enter the first number: ";
$iNr1 = trim (fgets (STDIN));
echo "Enter the second number: ";
$iNr2 = trim (fgets (STDIN));


// Data processing
if ($iNr1 > $iNr2) {
    $iNr3 = $iNr1;
    $iNr1 = $iNr2;
    $iNr2 = $iNr3;

    // alternative approach 7 4
    // $iNr1 = $iNr1 + $iNr2;
    // $iNr2 = $iNr1 - $iNr2;
    // $iNr1 = $iNr1 - $iNr2;

    echo $iNr1 . ", " . $iNr2, "\n";
}

?>