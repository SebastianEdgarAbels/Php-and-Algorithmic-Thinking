<?php
// Data input - prompt the user to enter values for x,z,w
echo "Enter a number for x: ";
$iX = trim (fgets (STDIN));
echo "Enter a number for z: ";
$iZ = trim (fgets (STDIN));
echo "Enter a number for w: ";
$iW = trim (fgets (STDIN));

// Data processing
$iFirstOp = 3 * $x ** 2 + 5 * $x + 2;
$iSecondOp = 7 * $w - 1/$z;
$iThirdOpBot = (3 + $x) / 7;

$y = (5 * ($iFirstOp / $iSecondOp) - z) / (4 * $iThirdOpBot);

// $y = (5 * ((3 * $x ** 2 + 5 * $x + 2) / (7 * $w - 1/$z)) - $z) / (4 * (3 + $x) / 7); 

// Results output - display the result on user's display
echo "The result is: " . $y, "\n";

?>
