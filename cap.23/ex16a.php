<?php
### First approach
// Data input - prompt the user to enter a-three-digit number
echo "Enter a three digit number: ";
$iNr = trim (fgets (STDIN));
$conv = (string) $iNr;
// echo strlen($conv), "\n";
// die();
// Data processing and results output
if($iNr != (int)$iNr) {
    echo "The number is a float! The number must be and integer!\n";    
}
elseif(strlen($conv) != 3) {
    echo "The number has to have three digits\n";
}
else {
    if((int)$conv[0] ** 3 + (int)$conv[1] ** 3 + (int)$conv[2] ** 3 == $iNr) {
        echo "The given number is an Armstrong number.\n";
    }
    else {
        echo "The given number is not an Armstrong number.\n";
    }
}
?>