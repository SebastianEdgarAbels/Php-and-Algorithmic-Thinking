<?php

// Data input - prompt the user to enter the number of steps the robot made
echo "Enter the number of steps the robot made: ";
$iSteps = trim (fgets (STDIN));

// Data processing
$iTransforsTheStepsInInches = $iSteps * 25;

$iMiles = (int ) ($iTransforsTheStepsInInches / 63360);
$iRemainder = $iTransforsTheStepsInInches % 63360;

$iYards = (int ) ($iRemainder / 36);
$iRemainder = $iRemainder % 36;

$iFeets = (int) ($iRemainder / 12);
$iInches = $iRemainder % 12;

// Results output - display the result on user's display
echo "The distance traveled " . $iMiles . " mile(s),  " . $iYards . " yard(s), " 
. $iFeets . " foot/feet and " . $iInches . " inches.\n";


?>