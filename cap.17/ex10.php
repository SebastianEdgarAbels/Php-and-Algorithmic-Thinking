<?php

// Data input - prompt the user to enter three numbers
echo "Enter first number: ";
$iNr1 = trim (fgets (STDIN));
echo "Enter the second number: ";
$iNr2 = trim (fgets (STDIN));
echo "Enter the third number: ";
$iNr3 = trim (fgets (STDIN));

// Data processing
$iSum1 = $iNr2 + $iNr3;
$iSum2 = $iNr1 + $iNr3;
$iSum3 = $iNr1 + $iNr2;

// if( ($iNr1 < $iNr2 + $iNr3) && ($iNr2 < $iNr1 + $iNr3) && ($iNr3 < $iNr1 + $iNr2))
if(($iNr1 < $iSum1) && ($iNr2 < $iSum2) && ($iNr3 < $iSum3)) {
    echo "The given numbers can be lengths of the three sides of a triangle.\n";
}
else {
    echo "Given numbers cannot be lengths of the three sides of a triangle.\n";
}

?>