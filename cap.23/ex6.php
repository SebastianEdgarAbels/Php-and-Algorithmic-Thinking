<?php

// Data input - prompt the user to enter two integers
echo "Enter an integer: ";
$iNr1 = trim (fgets (STDIN));
echo "Enter a second integer: ";
$iNr2 = trim (fgets (STDIN));

// Data processing and Results output
if($iNr1 < 0 || $iNr1 != (int)$iNr1) {
    echo "Your first numbered entered is invalid!\n";
    echo "Your number has to be positive and an integer!\n";
}
elseif($iNr2 < 0 || $iNr2 != (int)$iNr2) {
    echo "Your second number entered is invalid\n";
    echo "Your number has to be positive and an integer!\n";
}
elseif($iNr1 % 3 == 0 && $iNr2 % 3 == 0 && $iNr1 % 4 == 0 && $iNr2 % 4 == 0) {
    echo "Both numbers are divisible by 3 and 4\n";
}
else {
    echo "NN is not what you are looking for\n";
}


 ### His method
 ### and his method for Data Validation Process is better because he give hints 
 ### to the user where or what did he do wrong
// $x = trim(fgets(STDIN));
// if($x<0){
//     echo "First value must be not be negative\n";
// } 
// else {
//     if ($x != (int)$x) {
//     echo "First number must be integer\n";
//     } 
//     else {
//         $y = trim(fgets(STDIN)); 
//         if($y<0){
//             echo "Second value must be not be negative\n"; }
//         else {
//             if ($y != (int)$y) {
//                 echo "Second number must be integer\n"; }
//             else { 
//                 if($x % 3 == 0 && $x % 4 == 0 && $y % 3 == 0 && $y % 4 == 0){
//                     echo "Both values are divisible exactly by 3 and by 4\n"; 
//                 }
//                 else {
//                     echo "Nothing Special\n";
//                 } 
//             }
//         } 
//     }
// }

?>