<?php

// Data input - prompt the user to enter a day, a month and a year

echo "Enter a year: ";
$iYear = trim (fgets (STDIN));

// Data processing and Result output
if($iYear < 1582) {
    echo "Error\n";
}
else {
    echo "Enter a day (1 - 31): ";
    $day = trim (fgets (STDIN));
    echo "Enter a month (1 - 12): ";
    $month = trim (fgets (STDIN));
    if($month == 2) {
        if($iYear % 4 == 0 && $iYear % 100 != 0 || $iYear % 400 == 0) {
            echo 29 - $day, " days left\n";
        }
        else {
            echo 28 - $day, " days left\n";
        }
    }
    else {
        switch($month) {
            case 4:
            case 6:
            case 9: 
            case 11: 
                echo 30 - $day, " days left\n";
                break;
            default:
                echo 31 - $day, " days left\n";
                break;
        }
    }
}
?>