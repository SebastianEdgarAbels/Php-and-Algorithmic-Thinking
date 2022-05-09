<?php
// Data input - prompt the user to enter a number
echo "Enter a number: ";
$iNr = trim (fgets (STDIN));

// Data processing
if ($iNr > 0) {
    echo "Positive \n";
}

?>