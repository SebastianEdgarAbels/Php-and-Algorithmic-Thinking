<?php

// Data input - prompt the user to enter a roman number
echo "Enter a roman numeral between I and X: ";
$sNumeral = trim (fgets (STDIN));

// Data processing and Results output
switch ($sNumeral) {
    case "I":
        echo 1, "\n";
        break;
    case "II":
        echo 2, "\n";
        break;
    case "III":
        echo 3, "\n";
        break;
    case "IV":
        echo 4, "\n";
        break;
    case "V":
        echo 5, "\n";
        break;
    case "VI":
        echo 6, "\n";
        break;
    case "VII":
        echo 7, "\n";
        break;
    case "VIII":
        echo 8, "\n";
        break;
    case "IX":
        echo 9, "\n";
        break;
    case "X":
        echo 10, "\n";
        break;
    default:
        echo "Invalid roman numeral!\n";
}

?>