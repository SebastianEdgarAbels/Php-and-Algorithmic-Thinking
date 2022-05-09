<?php

// Data input - prompt the user to enter a string 
echo "Enter a string: ";
$sString = trim (fgets (STDIN));

// Data processing 
if($sString == strtoupper($sString)) {
    echo "Uppercase\n";
}

?>