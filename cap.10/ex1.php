<?php

// Data input - promt the user to enter the lenght of the base and height
echo "Enter the lenght of the base: ";
$base = trim (fgets (STDIN));
echo "Enter the lenght of the height: ";
$height = trim (fgets (STDIN));

// Data processing 
$area = 1/2 * $base + $height;

// Results output - display the result on user's screen
echo "The area of the triangle is: " . $area, "\n";

?>