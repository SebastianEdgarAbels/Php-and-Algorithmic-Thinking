<?php

echo "1. Convert Kelvin to Fahrenheit\n";
echo "2. Convert Fahrenheit to Kelvin\n";
echo "3. Convert Fahrenheit to Celsius\n";
echo "4. Convert Celsius to Fahrenheit\n";

// Data input - prompt the user to enter a choise between 1 and 4
echo "Enter a choise (1 - 4): ";
$iChoise = trim (fgets (STDIN));


// Data Processing and Results Output
if ($iChoise < 1 || $iChoise > 4) {
    echo "Invalid choise\n";
}
else{
    // Data input - prompt the user to enter a temperature value
    echo "Enter a temperature value: ";
    $iTemp = trim (fgets (STDIN));
    switch($iChoise) {
        case 1:
            if($iTemp < 0) {
                echo "Invalid temperature\n";
            }
            else {
                $iRes = 1.8 * $iTemp - 459.67;
                echo sprintf("%.2f", $iRes), "\n";
            }
            break;
        case 2:
            if($iTemp < -459.67) {
                echo "Invalid temperature\n";
            }
            else {
                $iRes = ($iTemp + 459.67) / 1.8;
                echo sprintf("%.2f", $iRes), "\n";
            }
            break;
        case 3:
            if($iTemp < -459.67) {
                echo "Invalid temperature\n";
            }
            else {
                $iRes = 5 / 9 * ($iTemp - 32);
                echo sprintf("%.2f", $iRes), "\n";
            }
            break;
        case 4:
            if($iTemp < -273.15) {
                echo "Invalid temperature\n";
            }
            else {
                $iRes = 9 / 5 * $iTemp + 32;
                echo sprintf("%.2f", $iRes), "\n";
            }
            break;
    }
}
?>