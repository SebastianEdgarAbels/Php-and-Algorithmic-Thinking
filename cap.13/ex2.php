<?php 

// Data input - prompt the user to enter a five-digit integer
echo "Enter a five-digit integer: ";
$iNr = trim (fgets (STDIN));

// Data processing
// First Approach
$iDigit1 = (int ) ($iNr / 10000);
$iRemainder = $iNr % 10000;

$iDigit2 = (int ) ($iRemainder / 1000);
$iRemainder = $iRemainder % 1000;

$iDigit3 = (int ) ($iRemainder / 100);
$iRemainder = $iRemainder % 100;

$iDigit4 = (int ) ($iRemainder / 10);
$iDigit5 = $iRemainder % 10;

$iReversedNr = $iDigit5 * 10000 + $iDigit4 * 1000 + $iDigit3 * 100 + $iDigit2 * 10 + $iDigit1;

// Results outoput - display the results on user's screen
echo "The reversed five-digit integer " . $iNr . " is: " . $iReversedNr, "\n";

// Second Approach
// $iDigit5 = $iNr % 10;
// $iRemainder = (int ) ($iNr / 10);

// $iDigit4 = $iRemainder % 10;
// $iRemainder = (int ) ($iRemainder / 10);

// $iDigit3 = $iRemainder % 10;
// $iRemainder = (int ) ($iRemainder / 10);

// $iDigit2 = $iRemainder % 10;
// $iDigit1 = (int ) ($iRemainder / 10);

// $iReversedNr = $iDigit5 * 10000 + $iDigit4 * 1000 + $iDigit3 * 100 + $iDigit2 * 10 + $iDigit1;
// echo $iReversedNr, "\n";
?>