<?php

// Data input - prompt the user to enter a non-negative integer 
echo "Enter a non-negative integer: ";
$iNr = trim (fgets (STDIN));

// Data processing and Results output
// first make the Data Validation Process
// non-negative integer means that the input musst be greater then 0 and must be an integer
if($iNr < 0 || $iNr != (int) $iNr) {
    echo "Invalid number.\n";
}
else {
    if($iNr % 2 == 0) {
        echo $iNr . " is a even number\n";
    }
    else {
        echo $iNr . " is a odd number\n";
    }
}
?>