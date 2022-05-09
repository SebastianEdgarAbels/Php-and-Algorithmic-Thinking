<?php

// Data input - prompt the user to enter a numeric value
echo "Enter a numeric value: ";
$iNr = trim (fgets (STDIN));

// Data processing and Results output
if($iNr < 0) {
    echo "Invalid value!\n";
}
else {
    echo "Square root of " . $iNr . " is " . sprintf("%.2f", (sqrt($iNr))) . "\n";
}

?>