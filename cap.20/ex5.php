<?php

// first attempt - my one 

// echo "Enter your four digit pin: ";
// $iPin = trim (fgets (STDIN));

// if($iPin == 1234) {
//     echo "Enter the amount of money that you want to withdraw: ";
//     $iAmount = trim (fgets (STDIN));
//     if($iAmount <= 500) {
//         $iR = (int)($iAmount / 100);
//         $iQ = $iAmount % 100;
//         echo $iR . " note(s) of $100, ";
    
//         $iR = (int)($iQ / 20);
//         $iQ = $iQ % 20;
//         echo $iR . " note(s) of $20, ";

//         $iR = (int)($iQ / 10);
//         $iQ = $iQ % 10;
//         echo $iR . " note(s) of $10, ";

//         $iR = (int)($iQ / 5);
//         $iQ = $iQ % 5;
//         echo $iR . " note(s) of $5, ";

//         $iR = (int)($iQ / 1);
//         echo $iR . " note(s) of $1\n";
//     }
//     else {
//         echo "Only amounts till 500$\n";
//     }
// }
// elseif($iPin != 1234) {
//     echo "Your Pin is incorrect!\n";
//     echo "You have another one attempt.\n";
//     echo "Please try again and enter your four digit pin: ";
//     $iPin = trim (fgets (STDIN));
//     if($iPin == 1234) {
//         echo "Enter the amount of money that you want to withdraw: ";
//         $iAmount = trim (fgets (STDIN));
//         if($iAmount <= 500) {
//             $iR = (int)($iAmount / 100);
//             $iQ = $iAmount % 100;
//             echo $iR . " note(s) of $100, ";
        
//             $iR = (int)($iQ / 20);
//             $iQ = $iQ % 20;
//             echo $iR . " note(s) of $20, ";
    
//             $iR = (int)($iQ / 10);
//             $iQ = $iQ % 10;
//             echo $iR . " note(s) of $10, ";
    
//             $iR = (int)($iQ / 5);
//             $iQ = $iQ % 5;
//             echo $iR . " note(s) of $5, ";
    
//             $iR = (int)($iQ / 1);
//             echo $iR . " note(s) of $1\n";
//         }
//         else {
//             echo "Only amounts till 500$\n";
//         }
//     }    
//     elseif($iPin != 1234) { 
//         echo "Your Pin is incorrect!\n";
//         echo "This is your last attempt!\n";
//         echo "Please try again and enter your four digit pin: ";
//         $iPin = trim (fgets (STDIN));
//         if($iPin == 1234) {
//             echo "Enter the amount of money that you want to withdraw: ";
//             $iAmount = trim (fgets (STDIN));
//             if($iAmount <= 500) {
//                 $iR = (int)($iAmount / 100);
//                 $iQ = $iAmount % 100;
//                 echo $iR . " note(s) of $100, ";
            
//                 $iR = (int)($iQ / 20);
//                 $iQ = $iQ % 20;
//                 echo $iR . " note(s) of $20, ";
        
//                 $iR = (int)($iQ / 10);
//                 $iQ = $iQ % 10;
//                 echo $iR . " note(s) of $10, ";
        
//                 $iR = (int)($iQ / 5);
//                 $iQ = $iQ % 5;
//                 echo $iR . " note(s) of $5, ";
        
//                 $iR = (int)($iQ / 1);
//                 echo $iR . " note(s) of $1\n";
//             }
//             else {
//                 echo "Only amounts till 500$\n";
//             }
//         }
//         elseif($iPin != 1234) {
//         echo "Your Pin is incorrect!\n";
//         echo "Your Card is blocked! Please contact your bank.\n";
//         }
//     }
// }



// I didn't respect the requirements (the max amount wasn't required)
// I have redundant Code !!! like 3x !!!
// His approach was better then mine, because the only Redundace that he has is when his 
//asking for the pin again, in case it was wrong
// so his way to resolve this problem is

// Data input - prompt the user to enter his four digit pin
echo "Enter your four digit pin: ";
$iPin = trim (fgets (STDIN));
// Data processing - check if the pin is right and Results output
if($iPin != 1234) {
    echo "Your Pin is incorrect!\n";
    echo "You have another one attempt.\n";
    echo "Please try again and enter your four digit pin: ";
    // Data input - prompt the user again to enter his four digit pin
    $iPin = trim (fgets (STDIN));
    // Data processing - now the pin is again verified and Results output
    if($iPin != 1234) {
        echo "Your Pin is incorrect!\n";
        echo "This is your last attempt!\n";
        echo "Please try again and enter your four digit pin: ";
        // Data input - prompt the user for the last last time to enter his four digit pin
        $iPin = trim (fgets (STDIN));
    }
}

// Data processing  
if($iPin != 1234) {
    echo "Your Pin is incorrect!\n";
    echo "Your Card is blocked! Please contact your bank.\n"; 
}
else {
    echo "Enter the amount of money that you want to withdraw: ";
    $iAmount = trim (fgets (STDIN));
    if($iAmount <= 500) {
        $iR = (int)($iAmount / 100);
        $iQ = $iAmount % 100;
        echo $iR . " note(s) of $100, ";
    
        $iR = (int)($iQ / 20);
        $iQ = $iQ % 20;
        echo $iR . " note(s) of $20, ";

        $iR = (int)($iQ / 10);
        $iQ = $iQ % 10;
        echo $iR . " note(s) of $10, ";

        $iR = (int)($iQ / 5);
        $iQ = $iQ % 5;
        echo $iR . " note(s) of $5, ";

        $iR = (int)($iQ / 1);
        echo $iR . " note(s) of $1\n";
    }
    else {
        echo "Only amounts till 500$\n";
    } 
}
?>