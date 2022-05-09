<?php

// Data input - prompt the user to enter three temperature values
echo "Enter the first temperature value: ";
$iTemp1 = trim (fgets (STDIN));
echo "Enter the second temperature value: ";
$iTemp2 = trim (fgets (STDIN));
echo "Enter the third temperature value: ";
$iTemo3 = trim (fgets (STDIN));

// Data processing 
if (($iTemp1 + $iTemp2 + $iTemo3) / 3 > 60) {
    echo "Heat Wave\n";
} 

?>