<?php

// Data input - prompt the user to enter a number
echo "Enter a number: ";
$iNr = trim (fgets (STDIN));

// Data processing and Results output
if($iNr == (int)$iNr) {
    echo $iNr . " is integer.\n";
}
else {
    echo $iNr . " is real.\n";
}

?>