<?php

// Data input - prompt the user to enter three performances
echo "Enter the first performance: ";
$iPer1 = trim (fgets (STDIN));
echo "Enter the second performance: ";
$iPer2 = trim (fgets (STDIN));
echo "Enter the third performance: ";
$iPer3 = trim (fgets (STDIN));

// Data processing
if((($iPer1 + $iPer2 + $iPer3) / 3) >= 8) {
    echo "Qualified\n";
}
else {
    echo "Disqualified\n";
}

?>