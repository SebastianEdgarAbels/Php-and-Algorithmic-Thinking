<?php

// Data input - prompt the user to enter a four non negative integer
echo "Enter a non negative integer: ";
$iNr = trim (fgets (STDIN));
$sNr = strlen ((string)($iNr));

// Data processing and Results output
if($sNr == 4) {
    echo $iNr . " is a four digit integer.\n";
}
else {
    echo $iNr . " is not a four digit integer.\n";
}
?>