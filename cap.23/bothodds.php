<?php

// Data input - prompt the user to enter 2 integers
echo "Enter an integer: ";
$iNr1 = trim (fgets (STDIN));
echo "Enter a second integer: ";
$iNr2 = trim (fgets (STDIN));

// Data processing and Results output
if($iNr1 % 2 == 0 && $iNr2 % 2 == 0) {
    echo "The numbers are even.\n";
}
elseif($iNr1 % 2 != 0 && $iNr2 % 2 != 0) {
    echo "The numbers are odd.\n";
}
else {
    echo "Nothing special.\n";
}

?>
