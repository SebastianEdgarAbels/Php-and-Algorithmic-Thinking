<?php

// Data input - prompt the user to insert the grades
$aGrades = array();
while(count($aGrades) < 4){
    echo "Enter your grades: ";
    $aGrades[] = trim (fgets (STDIN));
}


// Data processing
// $sAverageGrade = ($grades[0] + $grades[1] + $grades[2] + $grades[3]) / 4;
$sAverageGrade = (array_sum ($aGrades) / 4); // array_sum calculates the sum of all values in the array_sum

// Results output - display the average grade result on user's display
echo "The average grade is: " . sprintf("%.3f",$sAverageGrade), "\n";


?>