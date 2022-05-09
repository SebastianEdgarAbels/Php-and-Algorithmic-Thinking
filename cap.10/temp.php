<?php

// Data input - Prompt the user to enter a temp in Fahrenheit
echo "Enter a temperature in Fahrenheit: ";
$fahrenheit = trim (fgets (STDIN));

// Data processing - transforming the Fahrenheit temp into kelvin
$kelvin = ($fahrenheit + 459.67) / 1.8;

// Results output - display the results on user's screen
echo "The temperature in Kelvin is: " . sprintf("%.2f", $kelvin), "\n";