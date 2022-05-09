<?php

// Data input -prompt the user to enter a temperature in Fahrenheit degrees
echo "Enter a Fahrenheit temperature: ";
$iFahrenheit = trim (fgets (STDIN));

// Data processing
$iCelsius = (($iFahrenheit -32) * 5) / 9;

// Results output - display the result on user's display
echo "The temperature in Celsius is " . sprintf("%.2f", $iCelsius). "°", "\n";



?>