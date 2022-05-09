<?php

### First approach ### 
### my approach ###


// Data input - prompt the user to enter 2 values, one for temperature and one for windspeed
echo "Enter the temperature: ";
$iTemp = trim (fgets (STDIN));
echo "Enter a value for windspeed: ";
$iWind = trim (fgets (STDIN));

// Data processing and Results output
if($iTemp > 75) {
    if($iWind < 12) {
    echo "The day is hot and not windy.\n";
    }
    else {
        echo "The day is hot and windy.\n";
    }
}
elseif($iTemp <= 75) {
    if($iWind < 12) {
        echo "The day is cold and not windy.\n";
    }
    else {
        echo "The day is cold and windy.\n";
    }
}



### Second approach ###
### his approach ### 


// Data input - prompt the user to enter 2 values, one for temperature and one for windspeed
// echo "Enter the temperature: ";
// $iTemp = trim (fgets (STDIN));
// echo "Enter a value for windspeed: ";
// $iWind = trim (fgets (STDIN));

// // Data processing and Results output
// if($iTemp > 75) {
//     $sMessage1 = "hot";
// }
// else {
//     $sMessage1 = "cold";
// }

// if($iWind > 12) {
//     $sMessage2 = "windy";
// }
// else {
//     $sMessage2 = "not windy";
// }

// echo "The day is " . $sMessage1 . " and " . $sMessage2, "\n";

?>