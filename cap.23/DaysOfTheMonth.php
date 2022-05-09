<?php

// Data input - prompt the user to enter a year and a month
echo "Enter a year: ";
$iYear = trim (fgets (STDIN));


// Data processing and Results output
if($iYear < 1528) {
    echo "Error\n";
}
else {
    echo "Enter a month (1 - 12): ";
    $iMonth = trim (fgets (STDIN));
    if($iMonth == 2) {
        if($iYear % 4 == 0 && $iYear % 100 != 0 || $iYear % 400 == 0) {
            echo "This month has 29 days\n";
        }
        else {
            echo "This month has 28 days\n";
        }
    }
    elseif($iMonth == 4 || $iMonth == 6 || $iMonth == 9 || $iMonth == 11) {
        echo "This month has 30 days\n";
    }
    else {
        echo "This month has 31 days\n";
    }       
}

// or
// with Switch Case and look at the Cases 4, 6, 9 and 11 how they are writen
// if($iYear < 1528) {
//     echo "Error\n";
// }
// else {
//     echo "Enter a month (1 - 12): ";
//     $iMonth = trim (fgets (STDIN));
//     switch ($iMonth) { 
//         case 2:
//             if($iYear % 4 == 0 && $iYear % 100 != 0 || $iYear % 400 == 0) {
//                 echo "This month has 29 days\n";
//             }
//             else {
//                 echo "This month has 28 days\n";
//             }
//             break;
//         case 4:
//         case 6:
//         case 9:
//         case 11:
//             echo "This month has 30 days\n";
//             break;
//         default:
//             echo "This month has 31 days\n";
//             break;      
//     }
// }
// the Cases 4, 6, 9 and 11 are written so because there isn't any break statement in any of these
// cases, they all reach case 11 !!!
?>