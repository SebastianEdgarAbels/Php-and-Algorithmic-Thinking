<?php

// Data input - prompt the user to enter a string
echo "Enter a string: ";
$sString = trim (fgets (STDIN));

// Data processing
if (strlen($sString) > 20) {
    echo "Many characters\n";
}

?>