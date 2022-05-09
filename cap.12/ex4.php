<?php

// Data input - prompt the user to enter a vaue for x
echo "Enter a value for x: ";
$iX = trim (fgets (STDIN));

// Data processing 
$iY = 7 * $iX  / (2 * $iX  + 4 * ($iX ** 2 + 4));

// Results output - display the result on user's display
echo "The result is: " . $iY, "\n";
?>
