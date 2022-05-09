<?php

// Data input - Prompt the user to enter the miles driven and the gallons used
echo "Enter the total miles driven: ";
$miles = trim (fgets (STDIN));
echo "Enter the gallons consumed: ";
$gallons = trim (fgets (STDIN));

// Data processing - calculate the the fuel economy
$mpg = $miles/$gallons;

// Results output - display the results on user's screen
echo "The MPG is: " . sprintf("%.2f", $mpg), "\n";

?>