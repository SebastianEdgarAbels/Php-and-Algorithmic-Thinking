<?php

// Data input - prompt the user to enter 3 lenght values of a triangle
echo "Enter a value for first side of the triangle: ";
$iA = trim (fgets (STDIN));
echo "Enter a value for second side of the triangle: ";
$iB = trim (fgets (STDIN));
echo "Enter a value for third side of the triangle: ";
$iC = trim (fgets (STDIN));

// Data processing
$iS = ($iA + $iB + $iC) / 2;

$iArea = sqrt($iS * ($iS - $iA) * ($iS - $iB) * ($iS - $iC));

// Results output - display the results on user's display
echo "The area of the triangle is: " . $iArea, "\n";

?>