<?php
### Second approach
// Data input - prompt the user to enter a-three-digit number
echo "Enter a three digit number: ";
$iNr = trim (fgets (STDIN));

// Data processing and results output
if($iNr != (int)$iNr) {
    echo "The number is a float! The number must be and integer!\n";    
}
elseif($iNr < 100 || $iNr > 999) {
    echo "The number has to have three digits\n";
}
else {
    $iDig1 = (int)($iNr / 100);
    $iR = $iNr % 100;

    $iDig2 = (int)($iR / 10);
    $iDig3 = $iR % 10;
    if($iDig1 ** 3 + $iDig2 ** 3 + $iDig3 ** 3 == $iNr) {
        echo "The given number is an Armstrong number.\n";
    }
    else {
        echo "The given number is not an Armstrong number.\n";
    }
}