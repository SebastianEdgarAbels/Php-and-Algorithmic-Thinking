<?php

// Data input - prompt the user to enter his name
echo "Enter your name: ";
$sName = trim (fgets (STDIN));

// Data processing and Results output
$iRandNr = rand(1,3);
switch ($iRandNr) {
    case 1:
        echo "Good morning " . $sName, "\n";
        break;
    case 2:
        echo "Good evening " . $sName, "\n";
        break;
    case 3:
        echo "Good night " . $sName, "\n";
        break;
}

?>