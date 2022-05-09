<?php 
// Data input - prompt the user to enter his first name, middle name, last name and his preferred title 
echo "Enther your first name: ";
$sFN = trim (fgets (STDIN));

echo "Enter your middle name: ";
$sMD = trim (fgets (STDIN));

echo "Enter your last name: ";
$sLN = trim (fgets (STDIN));

echo "Enter your preferred title: ";
$sTIT = trim (fgets (STDIN));

// Results output - display the results on user's display
echo $sTIT . " " . $sFN . " " . $sMD .  " " .  $sLN, "\n";
echo $sFN . " " . $sMD . " " . $sLN, "\n";
echo $sLN . ", " . $sFN, "\n";
echo $sLN . ", " . $sFN . " " . $sMD, "\n";
echo $sLN . ", " . $sFN . " " . $sMD . ", " . $sTIT, "\n";
echo $sFN . " " . $sLN, "\n";

?>