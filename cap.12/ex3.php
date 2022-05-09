<?php

// Data input - prompt the user to enter a value
echo "Enter a value: ";
$iX = trim (fgets (STDIN));

// Data processing 
$iY = sqrt($iX) * ($iX ** 3 + $iX ** 2);

// Results output - display the result on user's display
echo "The answer is: " . $iY, "\n";

?>