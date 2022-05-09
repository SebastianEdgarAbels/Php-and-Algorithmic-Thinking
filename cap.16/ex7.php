<?php

// Data input - prompt the user to enter his age
echo "Enter your age: ";
$iAge = trim (fgets (STDIN));

// Data processing
if ($iAge > 14) {
    echo "You can drive a car in Kansas(USA).\n";
}

?>