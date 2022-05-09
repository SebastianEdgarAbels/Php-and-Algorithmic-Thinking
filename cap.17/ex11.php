<?php

// Data input - prompt the user to enter three values
echo "Enter the first number: ";
$iCat1 = trim (fgets (STDIN));
echo "Enter the second number: ";
$iCat2 = trim (fgets (STDIN));
echo "Enter the third value: ";
$iIpot = trim (fgets (STDIN));

// Data processing
if($iIpot ** 2 == $iCat1 ** 2 + $iCat2 ** 2 || $iCat1 ** 2 == $iIpot ** 2 + $iCat2 ** 2 || $iCat2 == $iIpot ** 2 + $iCat1 ** 2) {
    echo "The given numbers can be lengths of the threes sides of a right triangle.\n";
}
else {
    echo "The given numbers cannot be lengths of the three sides of a right triangle.\n";
}

?>