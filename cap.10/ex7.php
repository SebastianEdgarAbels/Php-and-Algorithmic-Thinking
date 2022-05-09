<?php

define("PI",3.14159);

// Data input - prompt the user to give a diameter
echo "Enter a diameter: ";
$iDiam = trim (fgets (STDIN));

// Data processing
$iRadius = $iDiam / 2;
$iPerimeter = 2 * PI * $iRadius; 
$iArea = PI * $iRadius ** 2; 
$iVolume=4/3 * PI * $iRadius ** 3;

// Results output - display the results on user's screen
echo "The Circle radius - " . sprintf("%.2f",$iRadius) 
. "\n circle perimeter - " . sprintf("%.2f",$iPerimeter) 
. "\n circle area - " . sprintf("%.2f",$iArea) 
. "\n and the sphere's volume - " . sprintf("%.2f",$iVolume) . "\n";

?>