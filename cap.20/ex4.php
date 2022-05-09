<?php 

// Data input - prompt the user to enter the lengths of three sides of a triangle
echo "Enter the legnth of the first side of the triangle: ";
$iSide1 = trim (fgets (STDIN));
echo "Enter the legnth of the second side of the triangle: ";
$iSide2 = trim (fgets (STDIN));
echo "Enter the legnth of the third side of the triangle: ";
$iSide3 = trim (fgets (STDIN));

// Data processing and Results output
if($iSide1 >= $iSide2 + $iSide3 || $iSide2 >= $iSide1 + $iSide3 || $iSide3 >= $iSide1 + $iSide2) {
    echo "Given numbers can't be the length of a triangle.\n";
}
else {
    if($iSide1 == $iSide2 && $iSide2 == $iSide3) {
        echo "The triangle is equilateral\n";
    }
    elseif($iSide1 ** 2 == $iSide2 ** 2 + $iSide3 **2 || $iSide2 ** 2 == $iSide1 ** 2 + $iSide3 ** 2 || $iSide3 ** 2 == $iSide1 ** 2 + $iSide2 ** 2) {
        echo "The triangle is right-angled.\n";
    }
    else {
        echo "Not special.\n";
    }
}