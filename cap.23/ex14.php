<?php

// Data input - prompt the user to enter the name and the ages of three persons
echo "Enter the age of the first person: ";
$age1 = trim (fgets (STDIN));
echo "Enter the age of the second person: ";
$age2 = trim (fgets (STDIN));
echo "Enter the age of the thirs person: ";
$age3 = trim (fgets (STDIN));

// Data processing and Results output
$min = $age1;
$max = $age2;
$midAge = $age3;

if($min > $age2){
    $min = $age2;
}
if($min > $age3) {
    $min = $age3;
}
if($max < $age1) {
    $max = $age1;
}
if($max < $age3) {
    $max = $age3;
}

// simpler were
// $midAge = $age1 + $age2 + $age3 - $min - $max

if($min == $age1 && $max == $age2 || $min == $age2 && $max == $age1){
    $midAge = $age3;
}
if($min == $age1 && $max == $age3 || $min == $age3 && $max == $age1){
    $midAge = $age2;
}
if($min == $age2 && $max == $age3 || $min == $age3 && $max == $age2){
    $midAge = $age1;
}

echo $midAge . " is the age in the middle.\n";

?>