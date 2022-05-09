<?php

// Data input - prompt the user for the lenght of Base and Height
echo "Enter the lenght of Base: ";
$base = trim (fgets (STDIN));
echo "Enter the lenght of Height: ";
$height = trim (fgets (STDIN));

// Data processig - Calculate the area of the recangle
$area = $base * $height;

// Results output - display the result on user's screen
echo "The Area of the rectangle is " . $area, "\n";


?>