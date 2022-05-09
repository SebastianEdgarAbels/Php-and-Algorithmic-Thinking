<?php
// Data input - prompt the user to enter 2 numbers
echo "Enter a number for the corresponding current month (1-12): ";
$iMonth = trim (fgets (STDIN));
echo "Enter a number for the corresponding current day (1-30): ";
$iDay = trim (fgets (STDIN));

// Data processing 
$iYear = (12 - $iMonth) * 30 - (30 - $iDay);

// Results output - display the result on user's display
echo "The number of days until the end of the year: " . $iYear, "\n";

?>