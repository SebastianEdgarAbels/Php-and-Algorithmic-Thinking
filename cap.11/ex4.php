<?php

// Data input - prompt the user to enter two angle sides
echo "Enter side A: ";
$iA = trim (fgets (STDIN));
echo "Enter side B: ";
$iB = trim (fgets (STDIN));

// Data processing
$iHypotenuse = sqrt($iA ** 2 + $iB ** 2);

// Results output - display the results on user's display
echo "The hypotenuse is " . $iHypotenuse, "\n";

?>