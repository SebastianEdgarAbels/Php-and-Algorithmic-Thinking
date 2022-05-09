<?php

// Data input - prompt the user to enter 2 angles

do {
echo "Enter the value for one angle: ";
$Angle1 = trim (fgets (STDIN));
echo "Enter the value for second angle: ";
$Angle2 = trim (fgets (STDIN));
    if(($Angle1 + $Angle2) > 180) {
        echo "The sum of the two angles can't be bigger then 180! \n"; 
    }
}

// Data processing 
while (($Angle1 + $Angle2) > 180);

$Angle3 = 180 - ($Angle1 + $Angle2);

// Results output - display the result on user's screen
echo "The third angle is: " . $Angle3, "\n";

?>