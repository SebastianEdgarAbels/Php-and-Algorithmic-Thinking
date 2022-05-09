<?php

// Data input - let the user enter a word such as "zero, "one" or "two"
echo "Enter a word that describe a number from \"zero\" to \"nine\": ";
$sWord = trim (fgets (STDIN));

// Data processing and Results output
switch ($sWord) {
    case "zero":
        echo 0, "\n";
        break;
    case "one":
        echo 1, "\n";
        break;
    case "two":
        echo 2, "\n";
        break;
    case "three":
        echo 3, "\n";
        break;
    case "four":
        echo 4, "\n";
        break;
    case "five":
        echo 5, "\n";
        break;
    case "six":
        echo 6, "\n";
        break;
    case "seven":
        echo 7, "\n";
        break;
    case "eight":
        echo 8, "\n,";
        break;
    case "nine":
        echo 9, "\n";
        break;
    default:
        echo "I don't know this number!\n";
}

?>