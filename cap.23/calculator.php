<?php

// Data input - prompt the user to enter 2 numbers and the mathematical operation type
echo "Enter first number: ";
$iNr1 = trim (fgets (STDIN));
echo "Enter the type of operation (+,-,*,/): ";
$sOperation = trim (fgets (STDIN));
echo "Enter second number: ";
$iNr2 = trim (fgets (STDIN));

// Data processing and Results output
switch ($sOperation) {
    case "+": 
        echo $iNr1 + $iNr2, "\n";
        break;
    case "-": 
        echo $iNr1 - $iNr2, "\n";
        break;
    case "*": 
        echo $iNr1 * $iNr2, "\n";
        break;
    case "/": 
        if($iNr2 == 0) {
            echo "Dividing thru 0 is impossible!\n";
        }
        else{
            echo $iNr1 / $iNr2, "\n";
        }
        break;
}
?>