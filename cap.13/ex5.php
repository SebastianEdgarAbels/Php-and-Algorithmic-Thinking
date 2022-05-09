<?php

// Data input - prompt the user to enter an integer representing an elapsed time
echo "Enter an integer representing an elapsed time in seconds: ";
$iElapsedTimeinSec = trim (fgets (STDIN));

// Data processing
// 1 min has 60 sec, 1 hour has 60 min -> 60 * 60 3600 sec, 1 day has 24 h ->  24 * 3600 = 86400
// 1 week has 7 days -> 7 * 86400 = 2.073.600

// First Approach
$iWeeks = (int ) ($iElapsedTimeinSec / 604800); // 60 * 60 * 24 * 7 = 604800
$iRemainder = $iElapsedTimeinSec % 604800;

$iDays = (int ) ($iRemainder / 86400); // 24 * 60 * 60 = 86400
$iRemainder = $iRemainder % 86400;

$iHours =  (int ) ($iRemainder / 3600); // 60 * 60 = 3600
$iRemainder = $iRemainder % 3600;

$iMin = (int ) ($iRemainder / 60); 
$iSec = $iRemainder % 60;

// Results output - display the result on user's display
echo "The total Weeks are " . $iWeeks . ", Days " . $iDays . ", Hours " . $iHours 
. ", Minutes " . $iMin . " and Seconds " . $iSec, "\n";

// Second Approach
// first divide to sec, then again with 60, then with 24 and then with 7
// $iSec = $iElapsedTimeinSec % 60;
// // echo $iSec . " seconds\n";
// $iRemainder = (int ) ($iElapsedTimeinSec / 60);
// // echo $iRemainder, "\n";

// $iMin = $iRemainder % 60;
// // echo $iMin . " minutes\n";
// $iRemainder = (int ) ($iRemainder / 60);
// // echo $iRemainder, "\n";

// $iHours = $iRemainder % 24;
// // echo $iHours . " hours\n";
// $iRemainder = (int ) ($iRemainder / 24);

// $iDays = (int ) ($iRemainder % 7);
// // echo $iDays . " days\n";
// $iWeeks = (int ) ($iRemainder / 7);
// // echo $iWeeks . " weeks\n";


// echo "The total Weeks are " . $iWeeks . ", Days " . $iDays . ", Hours " . $iHours 
// . ", Minutes " . $iMin . " and Seconds " . $iSec, "\n";

?>