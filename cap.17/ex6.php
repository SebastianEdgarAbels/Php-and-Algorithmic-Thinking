<?php

// Data input - prompt the user to enter an integer
echo "Enter an integer: ";
$iNr = trim (fgets (STDIN));

// Data processing + Results output
if ($iNr % 6 == 0 || $iNr % 7 == 0) {
    echo "The number given is a multiple of 6 or 7.\n";
}
else {
    echo $iNr . " is neither a multiple of 6 or 7.\n";
}

?>