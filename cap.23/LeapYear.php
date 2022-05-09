<?php

// Data input - prompt the user to enter a year
echo "Enter a year: ";
$iYear = trim (fgets (STDIN));

// Data processing and Results output
// Data Validation Process
if($iYear < 1582) {
    echo "Error\n";
}
else {
    if($iYear % 4 == 0 && $iYear % 100 != 0) {
        echo $iYear . " is a leap year\n";
    }
    else if($iYear % 400 == 0) {
        echo $iYear . " is a leap year\n";
    }
    else {
        echo $iYear . " is not a leap year\n";
    }
}


// or 
// if($iYear % 4 == 0 && $iYear % 100 != 0 || $iYear % 400 == 0) {
//     code ...
// }
?>