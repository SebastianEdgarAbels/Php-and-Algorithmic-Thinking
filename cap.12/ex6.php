<?php

// Data input - prompt the user to enter a value for x and w
echo "Enter a value for x: ";
$iX = trim (fgets (STDIN));
echo "Enter a value for w: ";
$iW = trim (fgets (STDIN));

// Data processing
$iY = (3 + $iW) / (6 * $iX - 7 * ($iX + 4)) + $iX * (3 * $iW + 1) ** (1/5) * (5 * $iX + 4) / (($iX ** 3 + 3) * ($iX -1) ** 7);

// Results output - display the result on user's display
echo "The result is: " . sprintf("%.2f", $iY), "\n";

?>