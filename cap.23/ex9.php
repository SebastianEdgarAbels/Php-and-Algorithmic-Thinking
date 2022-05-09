<?php

// Data input - prompt the user to enter an integer, a type of operation and a second integer
echo "Enter an integer: ";
$iNr1 = trim (fgets(STDIN));
echo "Enter the type of operation (+,-,*,/,MOD,power): ";
$sOp = strtoupper (trim (fgets (STDIN)));
echo "Enter the second integer: ";
$iNr2 = trim (fgets (STDIN));

// Data processing and Results output
switch ($sOp) {
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
            echo "Error! Division by 0!\n";
        }
        else {
            echo $iNr1 / $iNr2, "\n";
        }
        break;
    case "MOD":
        if($iNr2 == 0) {
            echo "Error! Division by 0!\n";
        }
        else {
            echo $iNr1 % $iNr2, "\n";
        }
        break;
    case "power":
        echo $iNr1 ** $iNr2, "\n";
    default:
        echo "Invalid operation\n";
}
?>
