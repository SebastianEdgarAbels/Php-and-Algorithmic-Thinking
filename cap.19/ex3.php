<?php 

// Data input - prompt the user to enter the name of a month
echo "Enter the name of a month: ";
$sMonth = trim (fgets (STDIN));

// Data processing and Results output
switch ($sMonth) {
    case "January":
        echo 1, "\n";
        break;
    case "February":
        echo 2, "\n";
        break;
    case "March":
        echo 3, "\n";
        break;
    case "April":
        echo 4, "\n";
        break;
    case "May":
        echo 5, "\n";
        break;
    case "June":
        echo 6, "\n";
        break;
    case "July":
        echo 7, "\n";
        break;
    case "August":
        echo 8, "\n";
        break;
    case "September":
        echo 9, "\n";
        break;
    case "October":
        echo 10, "\n";
        break;
    case "November":
        echo 11, "\n";
        break;
    case "December":
        echo 12, "\n";
        break;
    default:
        echo "Invalid command.\n";
}


?>