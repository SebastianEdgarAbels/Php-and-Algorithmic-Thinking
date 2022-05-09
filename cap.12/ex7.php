<?php

// Data input - prompt the user to enter a value for x and w
echo "Enter a value for x: ";
$iX = trim (fgets (STDIN));
echo "Enter a value for w: ";
$iW = trim (fgets (STDIN));

// Data processing
$iY = $iX ** $iX / (sin(2 * $iW / 3 + 5) - $iX) ** 2 + (sin(3 * $iX) + $iW) ** ($iX +1) / sqrt(7 * $iW) ** (3/2);

// Results output - display the result on user's display
echo "The result is: " . sprintf("%.2f", $iY), "\n";

?>