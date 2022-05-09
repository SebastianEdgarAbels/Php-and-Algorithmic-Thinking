<?php

// Data input - prompt the user to enter two integers
echo "Enter an integer: ";
$iNr1 = trim (fgets (STDIN));
echo "Enter another integer: ";
$iNr2 = trim (fgets (STDIN));

// Data Processing and Results output
if($iNr1 < 0 || $iNr2 < 0) {
    echo "Invalid number\n";
}
elseif($iNr1 % 2 == 1 || $iNr2 % 2 == 1) {
    echo "At least one of the numbers is odd\n";
}
else {
    echo "Nothing special\n";
}
?>