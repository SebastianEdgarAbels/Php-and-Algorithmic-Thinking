<?php 

define("PI",3.14159);

// Data input - Prompt the user to for the Radius
echo "Enter the Radius: ";
$rad = trim (fgets (STDIN));

// Data processing
$circleArea = PI * $rad;

// Results output - display the result on user's screen
echo "The circle area is " . sprintf("%.2f", $circleArea), "\n";
