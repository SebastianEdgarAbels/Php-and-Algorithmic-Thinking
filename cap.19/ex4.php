<?php 

echo "1. Convert  Miles to Yards\n";
echo "2. Convert Miles to Feet\n";
echo "3. Convert Miles to Inches\n";
// Data input - prompt the user to enter a choise (1,2 or 3)
echo "Enter a choise (1,2 or 3): ";
$iChoise = trim (fgets (STDIN));
echo "Enter a distance in miles: ";
$iDistance = trim (fgets (STDIN));

// Data processing and Results output
switch ($iChoise) {
    case 1:
        echo "1 mile = 1760 yards\n";
        echo "The required value is " . $iVal = $iDistance * 1760, " yards\n";
        break;
    case 2:
        echo "1 mile = 5280 feet\n";
        echo "The required value is " . $iVal = $iDistance * 5280, " feets\n";
        break;
    case 3:
        echo "1 mile = 63360 inces\n";
        echo "The required value is " . $iVal = $iDistance * 63360, " inches\n";
        break;
    default:
        echo "Invalid choise.\n";
        break;
}
// Without break will execute every each case and deafult !!
?>