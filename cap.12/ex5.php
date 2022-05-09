<?php

// Data input - prompt the user to enter 2 values for x and w
echo "Enter a value for x: ";
$iX = trim (fgets (STDIN));
echo "Enter a value for w: ";
$iW = trim (fgets (STDIN));

// Data processing
$iY = $iX ** ($iX + 1) / (tan( 2* $iW / 3 + 5) - tan($iX / 2 + 1)) ** 2;

// Results output - display the result on user's display
echo "The result is: " . sprintf("%.2f", $iY), "\n";

?>