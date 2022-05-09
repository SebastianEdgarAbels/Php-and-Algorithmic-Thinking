<?php

define("PI", 3.14159);

// Data input - prompt the user to enter a value for diameter in meters
echo "Enter a value for diameter in meter: ";
$iDiameter = trim (fgets (STDIN));

// Data processing
$iVol = 4/3 * PI * $iDiameter ** 3;

// Results output - display the volume on user's display
echo "The sphere's volume is: " . sprintf("%.2f", $iVol), "\n";

?>