<?php
// Data input - prompt the user to enter his weight and height
echo "Enter your weight: ";
$iWeight = trim (fgets (STDIN));
echo "Enter your height: ";
$iHeight = trim (fgets (STDIN));

// Data processing
$iBMI = $iWeight/$iHeight ** 2;

// Results output - display the bmi to user's display
echo "Your BMI is : " . sprintf("%.2f", $iBMI), "\n";

?>